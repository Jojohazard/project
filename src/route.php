<?php
/*
php 8.1
enum HTTPMethod {
    case GET;
    case POST;
}
*/
class Route {
    private $endpoint;
    private $method;
    private $handler;

    public function __construct(string $endpoint, string $method, callable $handler) {
        $this->endpoint = $endpoint;
        $this->method = $method;
        $this->handler = $handler;
    }

    public function getEndpoint(): string {
        return $this->endpoint;
    }

    public function getMethod(): string {
        return $this->method;
    }

    public function getHandler(): callable {
        return $this->handler;
    }
}