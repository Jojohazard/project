<?php
require_once __DIR__ . '/route.php';

class Router {
    private $routes = [];

    public function get(string $endpoint, callable $handler) {
        $this->routes[$endpoint] = new Route($endpoint, HTTPMethod::GET, $handler);
    }

    public function hasRoutes(string $endpoint, string $method) {
        return array_key_exists($endpoint, $this->routes) && $this->routes[$endpoint]->getMethod()->name === $method;
    }

    public function getRoutes(): array {
        return $this->routes;
    }
}