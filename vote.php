<?php  

require_once 'Config/bootstrap.php';
require_once BASE_PATH . '/Controllers/VoteController.php';


use Controllers\VoteController;
use Repositories\VoteRepository;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   // $repository = new VoteRepository();
   // $controller = new VoteController($repository);
    $controller = new VoteController();
    $controller->create();
}

