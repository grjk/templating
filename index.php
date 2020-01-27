<?php

ini_set('error_reporting', 1);
error_reporting(E_ALL);

require("vendor/autoload.php");

// Initiate F3
$f3 = Base::Instance();

// Default route
f3 -> route('GET /', function () {
    $view = new Template();
    echo $view->render("views/home.html");
})