<?php   

require_once 'Config/bootstrap.php';
require_once BASE_PATH . '/Controllers/PublicPostController.php';

use Controllers\PublicPostController;
$controller = new PublicPostController();
$controller->listByAuthor($_GET['author']);