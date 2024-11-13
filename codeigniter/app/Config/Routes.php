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

$routes->get('user/form', 'User::showForm');
$routes->post('user/createUser', 'User::createUser');
$routes->get('user/success', 'User::success');
$routes->get('user/failure', 'User::failure');

$routes->get('user/edit/(:segment)', 'User::updateForm/$1');
$routes->post('user/update/(:segment)', 'User::updateUser/$1');

$routes->post('user/delete/(:segment)', 'User::deleteUser/$1');