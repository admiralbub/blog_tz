<?php 
namespace App\Kernel;

class Router
{
    private array $routes = [];

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    public function dispatch($uri, $method)
    {
        $uri = parse_url($uri, PHP_URL_PATH);

        $action = $this->routes[$method][$uri] ?? null;

        if (!$action) {
            http_response_code(404);
            die('404 Not Found');
        }

        [$controller, $method] = explode('@', $action);

        $controllerClass = "App\\Controllers\\$controller";

        $controllerObject = new $controllerClass();

        call_user_func([$controllerObject, $method]);
    }
}

?>