<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', "Home::home");
$routes->get('/home/about', "Home::about");
$routes->get('/introduction', 'Introduction::index');
$routes->get('/form-class', 'FormClass::index');
$routes->post('/form-class/print-form-result', 'FormClass::print_form_result');
$routes->get('/calculator/addition/(:num)/(:num)', 'Calculator::addition/$1/$2');
$routes->get('/calculator/addition-alternative/(:num)/(:num)', 'Calculator::addition/$1/$2/true');

$routes->get('/test-query/book', 'TestQuery::book');
$routes->get('/test-query/user', 'TestQuery::user');
$routes->get('/test-query/role', 'TestQuery::role');
$routes->get('/test-query/category', 'TestQuery::category');
