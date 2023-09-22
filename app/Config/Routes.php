<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductController::laramel20');
$routes->get('/product/(:any)', 'ProductController::product/$1');
$routes->post('/save', 'ProductController::save');
$routes->get('/Delete/(:any)', 'ProductController::Delete/$1');
$routes->get('/edit/(:any)', 'ProductController::edit/$1');

