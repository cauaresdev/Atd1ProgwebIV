<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/fone', 'Home::abrirFone');
$routes->get('/profile', 'Home::abrirProfile');