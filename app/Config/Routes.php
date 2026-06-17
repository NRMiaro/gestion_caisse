<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('caisse', function($routes){
    $routes->get('choix', "CaisseController::choix");
    $routes->post('choix', "CaisseController::validerChoix");
});

$routes->group('achat', function($routes){
    $routes->get('saisie', "AchatController::saisie");
    $routes->post('add', "AchatController::addToCart");
    $routes->get('remove/(:num)', "AchatController::removeItem/$1");
});