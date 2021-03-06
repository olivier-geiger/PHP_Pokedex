<?php

require __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

// route accueil
$router->map(
    'GET',
    '/',
    [
        'controller' => 'MainController',
        'action' => 'home'
    ],
    'home'
);

// route detail
$router->map(
    'GET',
    '/detail/[i:numero]',
    [
        'controller' => 'MainController',
        'action' => 'detail'
    ],
    'detail'
);

//route type
$router->map(
    'GET',
    '/type',
    [
        'controller' => 'MainController',
        'action' => 'type'
    ],
    'type'
);

// route type par id
$router->map(
    'GET',
    '/type/[i:id]',
    [
        'controller' => 'MainController',
        'action' => 'typeId'
    ],
    'type-id'
);

// DISPATCHER
$match = $router->match();

if($match) {
    $controllerToUse = '\Pokedex\Controllers\\' . $match['target']['controller'];
    $methodToUse = $match['target']['action'];
    $controller = new $controllerToUse();
    $controller->$methodToUse($match['params']);

}
else {
    // gestion du 404
    $controller = new Pokedex\Controllers\MainController();
    $controller->pageNotFoundAction();
}