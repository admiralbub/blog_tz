<?php
namespace App\Kernel\Controller;
use App\Kernel\View\View;
use App\Kernel\View\ViewInterface;
use App\Kernel\Database\DatabaseInterface;
abstract class  Controller {
    protected ViewInterface $view;
    private DatabaseInterface $database;

    private DatabaseInterface $db;

    public function setView(ViewInterface $view): void
    {
        $this->view = $view;
    }

    public function setDatabase(DatabaseInterface $db): void
    {
        $this->db = $db;
    }

    protected function view(string $template, array $data = []): void
    {
        $this->view->page($template, $data);
    }

    protected function db(): DatabaseInterface
    {
        return $this->db;
    }
}