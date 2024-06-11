<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/KelolaUser/index', 'KelolaUser::index');
$routes->get('/produk', 'Admin\KelolaProduk::produk');
$routes->get('/KelolaUser/index', 'KelolaUser::index');

// $routes->group('admin', function($routes) {
//     $routes->get('/produk', 'KelolaProduk::produk');
//     $routes->get('produk/create', 'Admin\KelolaProduk::create');

// });
