<?php

define('APP_PATH', dirname(__DIR__));

require_once APP_PATH . '/vendor/autoload.php';
use App\Kernel\Router;


$router = new Router();

require_once APP_PATH . '/routes.php';
require_once APP_PATH . '/app/helpers.php';



$router->dispatch(
    $_SERVER['REQUEST_URI'],
    $_SERVER['REQUEST_METHOD']
);
?>