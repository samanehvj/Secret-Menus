<?php

include("./includes.php");

$controller = (isset($_GET["controller"])) ? $_GET["controller"] : "brand";
$action = (isset($_GET["action"])) ? $_GET["action"] : "list";
$id = (isset($_GET['id'])) ? $_GET['id'] : 0;
$category = (isset($_GET['category'])) ? $_GET['category'] : 0;
$name = (isset($_GET['name'])) ? $_GET['name'] : null;
$formRequest = (isset($_POST['name'])) ? $_POST : null;
$formFile = (isset($_FILES['image'])) ? $_FILES : null;


if ($controller) {
    $controller = ucfirst($controller) . "Controller";
}

$oController = new $controller();

if (method_exists($oController, $action)) {
    if ($id) {
        $oController->$action($id);
    } elseif ($category) {
        $oController->$action($category);
    } elseif (!empty($name)) {
        $oController->$action($name);
    } elseif (!empty($formRequest)) {
        $oController->$action($formRequest, $formFile);
    } else {
        $oController->$action();
    }
} else {
    $oController->err();
}
