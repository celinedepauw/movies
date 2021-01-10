<?php

// chargement de toutes les bibliothèques gérées par composer
require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Controllers/CategoryController.php';
require __DIR__ . '/../app/Models/Category.php';
require __DIR__ . '/../app/Models/Movie.php';

// récup url en get
$url = filter_input(INPUT_GET, '_url');

if($url == ''){
    $url == '/';
}

$router = new AltoRouter();

$baseUri = $_SERVER['BASE_URI'];


$router->setBasePath($baseUri);

// CRÉATION ROUTE PAGE HOME
$router->map(
    'GET',
    '/',
    [
        'controllerName' => 'MainController',
        'methodName' => 'home',
    ],
    'home',
);
//dump($router);


// CRÉATION ROUTE PAGE CATEGORY
$router->map(
    'GET',
    '/category/[i:idCategory]',
   [
        'controllerName' => 'CategoryController',
        'methodName' => 'category',
    ],
    'category',
);

$match = $router->match();
//dump($match);

if($match !== false){
    $routeData = $match['target'];
    $controllerName = $routeData['controllerName'];
    $controller = new $controllerName;
    $methodName = $routeData['methodName'];
    $variables = $match['params'];
    $controller->$methodName($variables);
}
else{
    echo 'ERREUR ! PAGE NON TROUVEE';
}