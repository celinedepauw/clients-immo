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
    '/achat/[i:idProject]',
    [
        'method' => 'displayProject',
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

// Route to display one project of sale
$router->map(
    'GET',
    '/vente/[i:idProject]',
    [
        'method' => 'displayProject',
        'controller' => '\Immo\Controllers\ProjectController'
    ],
    'sale'
);

// Routes to display form to add a project GET and POST
$router->map(
    'GET',
    '/nouveau',
    [
        'method' => 'add',
        'controller' => '\Immo\Controllers\ProjectController'
    ],
    'add-project'
);

$router->map(
    'POST',
    '/nouveau',
    [
        'method' => 'addPost',
        'controller' => '\Immo\Controllers\ProjectController'
    ],
    'add-project-post'
);

// Routes to edit a project GET and POST
$router->map(
    'GET',
    '/editer/[i:idProject]',
    [
        'method' => 'edit',
        'controller' => '\Immo\Controllers\ProjectController'
    ],
    'edit-project'
);

$router->map(
    'POST',
    '/editer/[i:idProject]',
    [
        'method' => 'editPost',
        'controller' => '\Immo\Controllers\ProjectController'
    ],
    'edit-project-post'
);

// Dispatch
$match = $router->match();

$dispatcher = new Dispatcher($match, '\Immo\Controllers\ErrorController::err404');

$dispatcher->dispatch();