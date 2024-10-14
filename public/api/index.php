<?php
$router = require_once __DIR__ . '/../../routes/api.php';

$req = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if ($router->inRoutes($req, $method)) {
    call_user_func($router->getRoutes()[$req]->getHandler());
} else {
    header("Location: /404");
    http_response_code(404);
    exit();
}