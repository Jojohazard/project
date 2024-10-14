<?php
require_once __DIR__ . '/../src/router.php';
require_once __DIR__ . '/../src/resource-controller.php';

$router = new Router();

$router->get('/', function () {
    echo 'home';
});

$router->get('/reserve', function () {
    echo 'reserve';
});

$router->get('/contact', function () {
    echo 'contact';
});

$router->get('/404', function () {
    echo '404';
});

return $router;