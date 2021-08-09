<?php
require __DIR__.'/../vendor/autoload.php';

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
}
else {
    $_SERVER['BASE_URI'] = '';
}


// Route home
$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => '\Immo\Controllers\MainController'
    ],
    'home'
);

// Route to display all the projects of purchases
$router->map(
    'GET',
    '/achats',
    [
        'method' => 'listPurchases',
        'controller' => '\Immo\Controllers\ProjectController'
    ],
    'purchases-list'
);

// Route to display one project of purchase
$router->map(
    'GET',
    '/achat/[i:idPurchase]',
    [
        'method' => 'displayPurchase',
        'controller' => '\Immo\Controllers\ProjectController'
    ],
    'purchase'
);

// Route to display all the projects of sales
$router->map(
    'GET',
    '/ventes',
    [
        'method' => 'listSales',
        'controller' => '\Immo\Controllers\ProjectController'
    ],
    'sales-list'
);

// Route to display form to add a project
$router->map(
    'GET',
    '/nouveau',
    [
        'method' => 'add',
        'controller' => '\Immo\Controllers\ProjectController'
    ],
    'add-project'
);

// Dispatch
$match = $router->match();

$dispatcher = new Dispatcher($match, '\Immo\Controllers\ErrorController::err404');

$dispatcher->dispatch();