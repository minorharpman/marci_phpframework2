<?php

namespace Controllers;

require_once REPOSITORY_PATH . '/UserRepository.php';
use Repositories\UserRepository;

class PrivateUserController

{
    // A szerzők listázásához
    public function index()
    {
        $userRepository = new UserRepository();
        $users = $userRepository->getAll();
        view('private/users/index', ['users' => $users]);
    }
    

    // Szerző hozzáadása oldal megjelenítése
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $form = [
                'name' => $_POST['name'] ?? '',
                'email' => $_POST['email'] ?? '',
                'status' => $_POST['status'] ?? 'active',
            ];
        } else {
            $form = [
                'name' => '',
                'email' => '',
                'status' => 'active',
            ];
        }
        view('private/users/create', ['form' => $form]);
    }
    // Szerző szerkesztése oldal megjelenítése

    public function edit()
    {
        if(isset($_SESSION['form'])){
            $form = $_SESSION['form'];
            unset($_SESSION['form']);
        }else{

            if(! isset($_GET['id'])){
                setFlashMessage('danger', 'Hiányzó azonosító!');
                redirect(BASE_URL . '/private-user.php');
            } 

            $id = $_GET['id'];

            $userRepository = new UserRepository();
            $user = $userRepository->getById($id);

            if(! $user){
                setFlashMessage('danger', 'Nincs ilyen azonosítójú felhasználó!');
                redirect(BASE_URL . '/private-user-edit.php');
            }

            $form = [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'status' => $user['status'],
            ];
        }
        view('private/users/edit', ['form' => $form]);
    }

    //  Szerző mentése az adatbázisba (feldoglozó)
    public function store($post)
    {
       $userRepository = new UserRepository();
         $id = $userRepository->create($post);

            if($id){
                $_SESSION['form'] = $post;
                setFlashMessage('success', 'Sikeres mentés!');
                redirect(BASE_URL . '/private-user.php');

    }
}

    public function update($post)
    {
        $userRepository = new UserRepository();
        $user = $userRepository->update($post);

        if(! $user) {
            $_SESSION['form'] = $post;
            setFlashMessage('danger', 'A felhasználó módosítása sikertelen!');
            redirect(BASE_URL . '/private-user-edit.php?id=' . $post['id']);
        }

             setFlashMessage('success', 'A felhasználó sikeresen módosítva!');
             redirect(BASE_URL . '/private-user-edit.php');
    }
        


    //  Szerző törlése az adatbázisból
    public function delete()
    {
        if(! isset($_GET['id'])){
            setFlashMessage('danger', 'Hiányzó azonosító!');
            redirect(BASE_URL . '/private-user.php');
        } 

        $id = $_GET['id'];

        $userRepository = new UserRepository();

        $user = $userRepository->getById($id);

        if(! $user){
            setFlashMessage('danger', 'Nincs ilyen azonosítójú felhasználó!');
            redirect(BASE_URL . '/private-user.php');
        }

        $userRepository->delete($id);

        setFlashMessage('success', 'A felhasználó sikeresen törölve!');
        redirect(BASE_URL . '/private-user.php');
    }
    
    // Szerző állapotának megváltoztatása

    public function statusChange($id)
    {
        
        $userRepository = new UserRepository();
        $user = $userRepository->getById($id);

        redirect(BASE_URL . '/private-user.php');

        /*if (!$user) {
            setFlashMessage('danger', 'Nincs ilyen azonosítójú felhasználó!');
            redirect(BASE_URL . '/private-user.php');
        }

        // Validálás, hogy a kérés valóban "active" vagy "inactive" értéket tartalmaz-e
        if (!in_array($requestedStatus, ['active', 'inactive'])) {
            setFlashMessage('danger', 'Érvénytelen státusz!');
            redirect(BASE_URL . '/private-user.php');
        }

        $newStatus = $requestedStatus === 'active' ? 'inactive' : 'active';
        $userRepository->statusChange($id, $newStatus);

        setFlashMessage('success', 'A felhasználó állapota sikeresen megváltoztatva!');
        redirect(BASE_URL . '/private-user.php');*/
    }

    public function show($id) {
        $postRepository = new PostRepository();
        $article = $postRepository->getById($id);
        view('public/posts/post', ['article' => $article]);
    }
}