<?php

namespace Controllers;

// require_once 'Config/bootstrap.php';
require_once REPOSITORY_PATH . '/PostRepository.php';
require_once SERVICE_PATH . '/FileUploadService.php';

use Repositories\PostRepository;
use Services\FileUploadService; 

class PublicPostController
{
    // A nyitólap a cikkek listázásához
    public function index() {
        $postRepository = new PostRepository();
        $articles = $postRepository->getAll(); 
        view('public/posts/posts', ['articles' => $articles]);
    }
    

    //Egy cikk megjelenítése
    public function show($id) {
        $postRepository = new PostRepository();
        $articles = $postRepository->getById($id);
        view('public/posts/post', ['articles' => $articles]);
    }

    // cikkek megjelenítése katgeória szerint

    public function listByCategory($category) {
        $postRepository = new PostRepository();
        $articles = $postRepository->showByCategory($category);
        view('public/posts/categories', ['articles' => $articles, 'category' => $category]);
    
    }


// cikkek megjelenítése szerző szerint

public function listByAuthor($author_name) {
    $postRepository = new PostRepository();
    $articles = $postRepository->showByAuthorName($author_name); // Feltételezve, hogy létezik ilyen metódus
    view('public/posts/authors', ['articles' => $articles, 'author_name' => $author_name]);
}
}
// cikkek megjelenítése dátum szerint


