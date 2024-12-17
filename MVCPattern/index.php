<?php

namespace MVCPattern;

require_once "Controller.php";
require_once "Model.php";
require_once "View.php";

$view = new View();
$model = new Model();

$controller = new Controller(
    $model,
    $view
);

$controller->updateView();

echo "\n*************************************" . PHP_EOL;


$newModel = new Model();

$newModel->setFirstName("John");
$newModel->setLastName("Doe");
$newModel->setEmail("csacas@cdc.de");

$controller->setModel($newModel);

$controller->updateView();