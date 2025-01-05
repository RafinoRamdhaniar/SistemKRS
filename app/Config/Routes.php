
<?php

use CodeIgniter\Router\RouteCollection;

/**
  * @var RouteCollection $routes
*/ 

// Halaman utama login
$routes->get('/', 'Home::index');

// Routing KRS
$routes->get('/krs', 'KRSController::index');
$routes->post('/krs/simpan', 'KRSController::simpan');
$routes->get('/krs/getMataKuliah', 'KRSController::getMataKuliah');

// Profil mahasiswa
$routes->get('/profile', 'MahasiswaController::profile');

// Admin dashboard (filter: auth untuk memastikan user sudah login)
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/dashboard', 'DashboardController::index');
});

// Login dan logout
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::doLogin');
$routes->get('/logout', 'AuthController::logout');
?>
