<?php 
namespace App\Kernel\Router;

use App\Kernel\View\View;

class Router implements RouterInterface
{
    private array $routes = [];

    public function get(string $uri, string $action): void
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function post(string $uri, string $action): void
    {
        $this->routes['POST'][$uri] = $action;
    }

    private function notFound404(): void
    {
        View::error();
    }

    public function dispatch(string $uri, string $httpMethod): mixed
    {
        $uri = trim(parse_url($uri, PHP_URL_PATH), '/');

        $routes = $this->routes[$httpMethod] ?? [];

        foreach ($routes as $route => $action) {

            $route = trim($route, '/');

            $pattern = preg_replace('#\{[a-zA-Z_]+\}#', '([^/]+)', $route);

            $pattern = "#^$pattern$#";

            if (preg_match($pattern, $uri, $matches)) {

                array_shift($matches);

                [$controller, $method] = explode('@', $action);

                $controllerClass = "App\\Controllers\\$controller";

                $controllerObject = new $controllerClass();
                
                return call_user_func_array(
                    [$controllerObject, $method],
                    $matches
                );
            }
        }

        $this->notFound404();

        return null;
    }
}

?>