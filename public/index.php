<?php
$router = require_once __DIR__ . '/../routes/web.php';

$req = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if ($router->inRoutes($req, $method)) {
    call_user_func($router->getRoutes()[$req]->getHandler());
} else {
    header("HTTP/1.0 404 Not Found");
    header("Location: /404");
    exit();
}