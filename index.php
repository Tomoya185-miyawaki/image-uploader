<?php
    require('vendor/autoload.php');
    use Image\Router\Route;

    $route = new Route();
    $route->switchRoute($_SERVER["REQUEST_URI"], $_SERVER["REQUEST_METHOD"]);
