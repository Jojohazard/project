<?php
require_once __DIR__ . '/../src/router.php';
require_once __DIR__ . '/../src/resource-controller.php';

$router = new Router();

$router->get('/', function () {
    $rc = new ResourceController();
    $rc->getPage('home.html');
});

$router->get('/kapena', function () {
    $rc = new ResourceController();
    $rc->getPage('kapena.html');
});

$router->get('/occhia', function () {
    $rc = new ResourceController();
    $rc->getPage('occhia.html');
});

$router->get('/the-lab', function () {
    $rc = new ResourceController();
    $rc->getPage('the-lab.html');
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
    http_response_code(404);
    echo '404';
});

return $router;