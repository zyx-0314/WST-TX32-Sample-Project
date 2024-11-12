<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::landing');
$routes->get('about', 'Home::about');
$routes->get('catalog', 'Home::catalog');
$routes->get('features', 'Home::features');
$routes->get('contact', 'Home::contact');
$routes->get('team', 'Home::team');