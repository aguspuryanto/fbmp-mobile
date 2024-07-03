<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::index');
$routes->post('/login/auth', 'Home::auth');
$routes->get('/logout', 'Home::logout');

$routes->get('/register', 'Register::index');
$routes->post('/register/save', 'Register::save');

$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->get('/produk', 'Produk::index', ['filter' => 'auth']);
$routes->get('/produk/create', 'Produk::create');
$routes->post('/produk/store', 'Produk::store');
$routes->post('/produk/publish', 'Produk::publish');
$routes->get('/produk/show/(:num)', 'Produk::show/$1');
$routes->get('/produk/edit/(:num)', 'Produk::edit/$1');
$routes->post('/produk/update/(:num)', 'Produk::update/$1');
$routes->get('/produk/delete', 'Produk::delete');

$routes->get('/akun', 'Akun::index', ['filter' => 'auth']);
$routes->get('/akun/create', 'Akun::create');
$routes->post('/akun/store', 'Akun::store');
$routes->get('/akun/edit/(:num)', 'Akun::edit/$1');
$routes->post('/akun/update/(:num)', 'Akun::update/$1');
$routes->get('/akun/delete/(:num)', 'Akun::delete/$1');

$routes->resource('products');

// $routes->group("admin", ["filter" => "auth"], function($routes){
//     $routes->get('/users', 'UserController::index');
//     $routes->get('/users/(:num)', 'UserController::show');
// });