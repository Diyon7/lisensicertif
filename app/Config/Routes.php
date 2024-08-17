<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->add('/', 'Home::index');


$routes->group('/name', ['filter' => 'permission:guest'], static function ($routes) {
    $routes->add('', 'Admin\Users::index');
});
