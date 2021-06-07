<?php

// loading libraries managed by composer
require __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    $_SERVER['BASE_URI'] = '';
}

// Home page
$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => '\Movies\Controllers\MainController',
    ],
    'home',
);

// page category
$router->map(
    'GET',
    '/category/[i:idCategory]',
   [
        'method' => 'category',
        'controller' => '\Movies\Controllers\CategoryController',
    ],
    'category',
);

// DISPATCHER
$match = $router->match();
$dispatcher = new Dispatcher($match, '\Movies\Controllers\ErrorController::err404');
$dispatcher->dispatch();

