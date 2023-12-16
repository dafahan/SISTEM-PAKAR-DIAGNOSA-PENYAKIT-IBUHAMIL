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
