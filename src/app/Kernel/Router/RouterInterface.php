<?php 
namespace App\Kernel\Router;

interface RouterInterface
{
    public function get(string $uri, string $action): void;

    public function post(string $uri, string $action): void;

    public function dispatch(string $uri, string $httpMethod): mixed;
}