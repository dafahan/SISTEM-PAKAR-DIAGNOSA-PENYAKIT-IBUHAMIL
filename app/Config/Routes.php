<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AdminController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/register', 'Home::register');
$routes->get('/diagnosis', 'Home::diagnosis');
$routes->post('/diagnosis', 'Home::diagnosis');























//Admin
$routes->group('admin', ['filter' => 'role:admin'], function ($routes) {
    $routes->get('/', [AdminController::class, 'admin']);

    $routes->get('/pasien/delete/(:any)', [AdminController::class, 'deletePasien']);
    
    $routes->get('/penyakit', [AdminController::class, 'adminpenyakit']);
    $routes->get('/penyakit/tambah', [AdminController::class, 'tambahpenyakit']);
    $routes->get('/penyakit/delete/(:any)', [AdminController::class, 'deletePenyakit']);
    $routes->get('/penyakit/edit/(:any)', [AdminController::class, 'tambahpenyakit']);
    $routes->post('/penyakit/update/(:any)', [AdminController::class, 'updatepenyakit']);
    $routes->post('/store', [AdminController::class, 'storepenyakit']);
    
    $routes->get('/gejala', [AdminController::class, 'admingejala']);
    $routes->get('/gejala/(:any)/?(:any)', [AdminController::class, 'tambahgjl']);
    $routes->post('/gejala/(:any)/?(:any)', [AdminController::class, 'storegjl']);
    $routes->get('/tambahgjl', [AdminController::class, 'tambahgjl']);
    $routes->post('/storegjl', [AdminController::class, 'storegjl']);
    
    $routes->get('/rules', [AdminController::class, 'adminsolusi']);
    $routes->get('/tambahrules', [AdminController::class, 'tambahsol']);
    $routes->post('/storerules', [AdminController::class, 'storesol']);
    
    $routes->get('/diagnosis', [AdminController::class, 'diagnosis']);
    $routes->post('/tambah', [AdminController::class, 'tambahdiagnosis']);
});

// MYTH AUTH


use App\Auth as AuthConfig;

// Myth:Auth routes file.
$routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(AuthConfig::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});

