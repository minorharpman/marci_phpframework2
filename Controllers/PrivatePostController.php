<?php

namespace Controllers;
require_once 'Config/bootstrap.php';
require_once REPOSITORY_PATH . '/PostRepository.php';
require_once REPOSITORY_PATH . '/UserRepository.php';
require_once SERVICE_PATH . '/FileUploadService.php';

use Repositories\PostRepository;
use Repositories\UserRepository;
use Services\FileUploadService; 

class PrivatePostController
{
    private $postRepository; 
    private $userRepository;
    private $fileUploadService;
    // A nyitólap a cikkek listázásához
    public function __construct() {
        $this->postRepository = new PostRepository();
        $this->userRepository = new UserRepository(); 
        $this->fileUploadService = new FileUploadService();
    }
    
    public function index()
    {
        $article = $this->postRepository->getAllPosts();
        
        view('private/posts/posts', ['article' => $article]);
    }
    
    // Cikk hozzáadása oldal megjelenítése
    public function create() {
        
        $authors = $this->userRepository->getAll();
        
        // require TEMPLATE_PATH . '/private/posts/create.view.php';
        view('private/posts/create', ['authors' => $authors]);
    }

    // Cikk mentése az adatbázisba (feldoglozó)
    public function store() {
        
        $image_id = null;  // Alapértelmezett érték, ha nincs kép
        $image_id = $this->fileUploadService->execute($_FILES['image']);
        
     
        $articleData = [
            'title' => $_POST['title'] ?? null,
            'author_id' => $_POST['author_id'] ?? null,
            'image_id' => $image_id,  // Itt használjuk az image_id-t, ha van
            'summary' => $_POST['summary'] ?? null,
            'articleText' => $_POST['articleText'] ?? null,
            'category' => $_POST['category'] ?? null
        ];
    
        $result = $this->postRepository->create($articleData);
        
        if ($result) {
            $message = "A cikk sikeresen feltöltve.";
        } else {
            $message = "Hiba történt a cikk feltöltésekor.";
        }
        
        echo $message;
        view('private/posts/create', ['message' => $message]);
    }



    // Cikk módosítása oldal megjelenítése
    public function edit()
    {
        
        // var_dump("adataim" , $_REQUEST );
        
        
        if(isset($_SESSION['form'])){
            $form = $_SESSION['form'];
            unset($_SESSION['form']);
        }else{
            if(! isset($_GET['id'])){
                setFlashMessage('danger', 'Hiányzó azonosító!');
                redirect(BASE_URL . '/private-post-dashboard.php');
            } 

            $id = $_GET['id'];
           //  echo "ID: " . $id;

            $article = $this->postRepository->getById($id);

            // var_dump("cikk" , $article);

            if(! $article){
                setFlashMessage('danger', 'Nincs ilyen azonosítójú cikk!');
                redirect(BASE_URL . '/private-post-dashboard.php');
            }
/*
            $form = [
                'id' => $article['id'],
                'title' => $article['title'],
                'author_id' => $article['author_id'],
                'summary' => $article['summary'],
                'articleText' => $article['articleText'],
                'category' => $article['category']
            ];
  */
        }

        view('private/posts/edit', ['article' => $article]);
    }

    // Cikk módosítása mentése az adatbázisba (feldoglozó)
    public function update($article)
    {
        $article = $this->postRepository->update($article);
     
        echo "sikeresen módosítva!";   
        var_dump("módosított cikk" , $article);

        if(! $article) {
            $_SESSION['form'] = $article;
            setFlashMessage('danger', 'A felhasználó módosítása sikertelen!');
            redirect(BASE_URL . '/private-post-dashboard.php');
        }

        setFlashMessage('success', 'A felhasználó sikeresen módosítva!');
        redirect(BASE_URL . '/private-post-dashboard.php');
    }

    // Cikk törlése
    public function delete()
    {
        if(! isset($_GET['id'])){
            setFlashMessage('error', 'Hiányzó azonosító!');
            redirect(BASE_URL . '/private-post-dashboard.php');
        } 

        $id = $_GET['id'];
       
        $article = $this->postRepository->getById($id);

        if(! $article){
            setFlashMessage('error', 'Nincs ilyen azonosítójú felhasználó!');
            redirect(BASE_URL . '/private-post-dashboard.php');
        }

        $this->postRepository->delete($id);

        setFlashMessage('success', 'A felhasználó sikeresen törölve!');
        redirect(BASE_URL . '/private-post-dashboard.php');
    }

    public function getAllPosts() {
        $sql = "SELECT article.*, user.name AS user_name FROM article
                JOIN user ON article.author_id = user.id ORDER BY article.created_at DESC";
        $stmt = $this->db->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
   
}
