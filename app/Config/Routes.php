<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/introduction', 'Introduction::index');
$routes->get('/calculator/addition/(:num)/(:num)', 'Calculator::addition/$1/$2');
$routes->get('/calculator/addition-alternative/(:num)/(:num)', 'Calculator::addition/$1/$2/true');
