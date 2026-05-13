<?php 
namespace App\Kernel;
use App\Kernel\View;
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
    private function notFound404(): void
    {
        View::error();
    }

    public function dispatch($uri, $httpMethod)
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
    }

}

?>