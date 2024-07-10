<?php

require './router.php';

$router = new Router();
$router->add('/', 'Home', 'index');
$router->add('/about', 'About', 'index');

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($url);
