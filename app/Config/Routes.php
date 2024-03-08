<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/data_peserta', 'Home::data_peserta');
$routes->get('/data_transaksi', 'Home::data_transaksi');
$routes->get('/data_bulanan', 'Home::data_bulanan');
$routes->get('/januari', 'Home::januari');
$routes->get('/februari', 'Home::februari');
$routes->get('/maret', 'Home::maret');
$routes->get('/april', 'Home::april');
$routes->get('/mei', 'Home::mei');
$routes->get('/juni', 'Home::juni');
$routes->get('/juli', 'Home::juli');
$routes->get('/agustus', 'Home::agustus');
$routes->get('/september', 'Home::september');
$routes->get('/oktober', 'Home::oktober');
$routes->get('/november', 'Home::november');
$routes->get('/desember', 'Home::desember');
