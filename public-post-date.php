<?php

require_once 'Config/bootstrap.php';
require_once BASE_PATH . '/Controllers/PublicPostController.php';

use Controllers\PublicPostController;
$controller = new PublicPostController();
if (isset($_GET['date']) && $date = DateTime::createFromFormat('Y-m-d', $_GET['date'])) {
    $date = $date->format('Y-m-d'); // További biztosíték, hogy helyes formátumú a dátum
    $controller->listByDate($date);
} else {
    echo "Invalid or missing date.";
    // Ideális esetben ide egy alapértelmezett oldalt vagy hibaoldalt töltene be a rendszer
}