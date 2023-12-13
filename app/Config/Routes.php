<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/register', 'Home::register');


//Admin
$routes->get('/admin', 'AdminController::admin');
$routes->get('/admin/penyakit', [AdminController::class, 'adminpenyakit'] );
$routes->get('/admin/tambah', [AdminController::class, 'tambahpenyakit'] );
$routes->post('/admin/store', [AdminController::class, 'storepenyakit'] );
$routes->get('/admin/gejala', [AdminController::class, 'admingejala'] );
$routes->get('/admin/tambahgjl', [AdminController::class, 'tambahgjl'] );
$routes->post('/admin/storegjl', [AdminController::class, 'storegjl'] );
$routes->get('/admin/solusi', [AdminController::class, 'adminsolusi'] );
$routes->get('/admin/tambahsol', [AdminController::class, 'tambahsol'] );
$routes->post('/admin/storesol', [AdminController::class, 'storesol'] );

