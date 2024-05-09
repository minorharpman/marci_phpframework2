<?php

namespace Controllers;

require_once REPOSITORY_PATH . '/PostRepository.php';
use Repositories\PostRepository;

class DashboardController
{
    public function index()
    {
        $postRepository = new PostRepository();
        $articles = $postRepository->getAll(); 
        
       // var_dump($articles);
        $this->view('private/posts/posts', ['articles' => $articles]);
    }

    private function view($path, $data)
    {
        extract($data); 
        require_once TEMPLATE_PATH . "/$path.view.php";
    }

    // cikk törlés

public function deletePost($id)
{
    $postRepository = new PostRepository();
    $postRepository->delete($id);
    setFlashMessage('success', 'A cikk sikeresen törölve!');
    redirect(BASE_URL . '/private-posts.php');
}
}