<?php

    require_once "../vendor/autoload.php";
    $route = new \App\Route;
    echo '<h1>Isso esta funcionando</h1>';
    print_r($route->getUrl());
    print_r($route->getRouters());



?>