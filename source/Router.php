<?php

namespace Source;

class Router
{
    private $routes = [];

    public function add($method, $route, $handler)
    {
        $this->routes[] = [
            'method' => $method,
            'route' => $route,
            'handler' => $handler
        ];
    }

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($method == $route['method'] && preg_match('#^' . $route['route'] . '$#', $path, $matches)) {
                call_user_func_array($route['handler'], array_slice($matches, 1));
                return;
            }
        }

        http_response_code(404);
        echo json_encode(['message' => 'Not Found']);
    }
}