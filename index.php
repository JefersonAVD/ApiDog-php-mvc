<?php
    require_once __DIR__."/config/autoloader.php";
    
    $path = $_SERVER['PATH_INFO'] ?? $_SERVER['REQUEST_URI'];
    $routes = require __DIR__."/config/routes.php";

    if(!array_key_exists($path,$routes)){
        http_response_code(404);
        exit();
    }

    $classController = $routes[$path];
    $controller = new $classController();
    $controller->getRequisition();
?>