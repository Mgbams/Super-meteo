<?php
session_start();
require 'src/controller/HomeController.php';
//require 'src/model/model.php';
require "src/service/formVerification.php";

$page = "";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $controller;
}

$route = array(
    "home" => HomeController::class

);

foreach ($route as $routeValue => $className) {
    if ($page == $routeValue) {
        $controller = new $className;
        $controller->manage();
        break;
    }
}


//Er 404

if (!isset($controller)) {
    $controller = new HomeController();
    $controller->manage();
}
