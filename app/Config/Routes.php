<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('caisse', ['filter' => 'auth'], function ($routes) {
    $routes->get('choix', 'CaisseController::choix');
    $routes->post('choix', 'CaisseController::validerChoix');
});

$routes->group('achat', ['filter' => 'auth'], function($routes){
    $routes->get('saisie', "AchatController::saisie");
    $routes->post('add', "AchatController::addToCart");
    $routes->get('remove/(:num)', "AchatController::removeItem/$1");
});

$routes->get('/', 'AuthController::pageLogin');
$routes->get('login', 'AuthController::pageLogin');
$routes->post('authenticate', 'AuthController::authenticate');
