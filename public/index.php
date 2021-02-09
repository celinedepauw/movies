<?php

// chargement de toutes les bibliothèques gérées par composer
require __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    // Alors on définit le basePath d'AltoRouter
    $router->setBasePath($_SERVER['BASE_URI']);
    // ainsi, nos routes correspondront à l'URL, après la suite de sous-répertoire
}
// sinon
else {
    // On donne une valeur par défaut à $_SERVER['BASE_URI'] car c'est utilisé dans le CoreController
    $_SERVER['BASE_URI'] = '';
}


// CRÉATION ROUTE PAGE HOME
$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => '\Movies\Controllers\MainController',
    ],
    'home',
);


// CRÉATION ROUTE PAGE CATEGORY
$router->map(
    'GET',
    '/category/[i:idCategory]',
   [
        'method' => 'category',
        'controller' => '\Movies\Controllers\CategoryController',
    ],
    'category',
);

 // AJOUT D'UN FILM 
 $router->map(
    'GET',
    '/movie/add',
    [
        'method' => 'movie',
        'controller' => '\Movies\Controllers\MovieController'
    ],
    'movie-add'
);

$router->map(
    'POST',
    '/movie/add',
    [
        'method' => 'addMovie',
        'controller' => '\Movies\Controllers\MovieController'
    ],
    'movie-addPost'
);

// DISPATCHER

$match = $router->match();

$dispatcher = new Dispatcher($match, '\Movies\Controllers\ErrorController::err404');
$dispatcher->dispatch();

