<?php
require_once __DIR__ . '/../src/router.php';
require_once __DIR__ . '/../src/resource-controller.php';

$router = new Router();

$router->get('/', function () {
    $rc = new ResourceController();
    $rc->getPage('home.html');
});

$router->get('/reserve', function () {
    echo 'reserve';
});

$router->get('/contact', function () {
    echo 'contact';
});

$router->get('/404', function () {
    http_response_code(404);
    echo '404';
});

return $router;