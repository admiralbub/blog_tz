<?php
namespace App\Kernel\Controller;
use App\Kernel\View\View;
use App\Kernel\View\ViewInterface;
abstract class  Controller {
    protected ViewInterface $view;
    public function __construct()
    {
        $this->view = new View();
    }
    public function view($template, $data = []): void
    {
        $this->view->page($template, $data = []);
    }
}