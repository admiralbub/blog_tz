<?php
namespace App\Kernel\Container;
use App\Kernel\View\View;
use App\Kernel\View\ViewInterface;
use App\Kernel\Router\Router;
use App\Kernel\Router\RouterInterface;
use App\Kernel\Database\Database;
use App\Kernel\Database\DatabaseInterface;
use App\Kernel\Config\Config;
use App\Kernel\Config\ConfigInterface;
class Container {

    public readonly ViewInterface $view;

    public readonly ConfigInterface $config;

    public readonly DatabaseInterface $database;

    public readonly RouterInterface $router;

    public function __construct()
    {
        $this->registerServices();
    }

    private function registerServices(): void
    {
        $this->config = new Config();
        $this->database = new Database($this->config);
        $this->view = new View();
        $this->router = new Router();
    }
}