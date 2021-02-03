<?php

// chargement de toutes les bibliothèques gérées par composer
require __DIR__ . '/../vendor/autoload.php';

//require __DIR__ . '/../app/Controllers/MainController.php';
//require __DIR__ . '/../app/Controllers/CategoryController.php';
//require __DIR__ . '/../app/Models/Category.php';
//require __DIR__ . '/../app/Models/Movie.php';

/* récup url en get
$url = filter_input(INPUT_GET, '_url');

if($url == ''){
    $url == '/';
}*/

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

//$baseUri = $_SERVER['BASE_URI'];
//$router->setBasePath($baseUri);

// CRÉATION ROUTE PAGE HOME
$router->map(
    'GET',
    '/',
    [
        'controllerName' => '\Movies\Controllers\MainController',
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
        'controllerName' => '\Movies\Controllers\CategoryController',
        'methodName' => 'category',
    ],
    'category',
);

$match = $router->match();
//dd($match);
//TODO dispatcher ne fonctionne pas : TROUVER LE BUG
//$dispatcher = new Dispatcher($match, '\Movies\Controllers\ErrorController::err404');
//$dispatcher->dispatch();


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