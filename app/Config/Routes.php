<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->get('/register', 'Register::index');
$routes->match(['get', 'post'], 'register/save', 'Register::save');
$routes->match(['get', 'post'], 'login/auth', 'Login::auth');
$routes->get('/logout', 'About::logout');

$routes->get('/about', 'About::index', ['filter' => 'auth']);
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

$routes->group('barang', ['filter' => 'auth'], function ($routes) {
    $routes->get('view', 'Barang::index');
    $routes->get('tambah', 'Barang::tambah');
    $routes->get('edit/(:any)', 'Barang::edit/$1');
    $routes->post('add', 'Barang::add');
    $routes->post('update', 'Barang::update');
    $routes->get('hapus/(:any)', 'Barang::hapus/$1');
});


$routes->group('karyawan', ['filter' => 'auth'], function ($routes) {
    $routes->get('view', 'Karyawan::index');
    $routes->get('tambah', 'Karyawan::tambah');
    $routes->get('edit/(:any)', 'Karyawan::edit/$1');
    $routes->post('add', 'Karyawan::add');
    $routes->post('update', 'Karyawan::update');
    $routes->get('hapus/(:any)', 'Karyawan::hapus/$1');
});

$routes->group('mobil', ['filter' => 'auth'], function ($routes) {
    $routes->get('view', 'Mobil::index');
    $routes->get('tambah', 'Mobil::tambah');
    $routes->get('edit/(:any)', 'Mobil::edit/$1');
    $routes->post('add', 'Mobil::add');
    $routes->post('update', 'Mobil::update');
    $routes->get('hapus/(:any)', 'Mobil::hapus/$1');
});

$routes->group('user', ['filter' => 'auth'], function ($routes) {
    $routes->get('view', 'User::index');
    $routes->get('tambah', 'User::tambah');
    $routes->get('edit/(:any)', 'User::edit/$1');
    $routes->post('add', 'User::add');
    $routes->post('update', 'User::update');
    $routes->get('hapus/(:any)', 'User::hapus/$1');
});
