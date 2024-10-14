<?php
require_once __DIR__ . '/../src/router.php';
require_once __DIR__ . '/../src/resource-controller.php';

$router = new Router();

$router->get('/', function () {
    $rc = new ResourceController();
    $rc->getPage('home.html');
});

$router->get('/reserve', function () {
    $rc = new ResourceController();
    $rc->getPage('reserve.html');
});

$router->get('/contact', function () {
    $rc = new ResourceController();
    $rc->getPage('contact.html');
});

$router->get('/404', function () {
    $rc = new ResourceController();
    $rc->getPage('404.html');
});

return $router;