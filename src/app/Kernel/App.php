<?php
namespace App\Kernel;

use App\Kernel\Container\Container;
use App\Kernel\Router\RouterInterface;

class App
{
    private Container $container;

    private RouterInterface $router;

    public function __construct()
    {
        $this->container = new Container();

        $this->router = $this->container->router;

        $router = $this->router;

        require_once APP_PATH . '/web/routes.php';
    }

    public function run(): void
    {
        $this->router->dispatch(
            $_SERVER['REQUEST_URI'],
            $_SERVER['REQUEST_METHOD']
        );
    }
}