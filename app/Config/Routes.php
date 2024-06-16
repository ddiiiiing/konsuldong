<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Home::products');
$routes->get('/testimoni', 'Home::testimoni');
$routes->get('/contact', 'Home::contact');

// Authentication routes
$routes->get('/auth/register', 'Auth::register');
$routes->post('/auth/register', 'Auth::processRegister');
$routes->get('/auth/login', 'Auth::login');
$routes->post('/auth/login', 'Auth::processLogin');
$routes->get('/auth/logout', 'Auth::logout');

// Dashboard routes
$routes->get('/dashboard/admin', 'Dashboard::admin');
$routes->get('/dashboard/user', 'Dashboard::user', ['filter' => 'auth']);

//order routes
$routes->get('/order/create', 'OrderController::create', ['filter' => 'auth']);
$routes->post('/order/store', 'OrderController::store', ['filter' => 'auth']);
$routes->get('/order/history', 'OrderController::history', ['filter' => 'auth']);

$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/updateStatus/(:num)', 'AdminController::updateStatus/$1');
$routes->get('/admin/delete/(:num)', 'AdminController::delete/$1');
$routes->get('/admin/edit/(:num)', 'AdminController::edit/$1');
$routes->post('/admin/update/(:num)', 'AdminController::update/$1');

