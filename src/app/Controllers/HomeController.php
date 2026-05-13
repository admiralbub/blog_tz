<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;
use App\Kernel\Database\DatabaseInterface;
class HomeController extends Controller
{
  
    public function index()
    {
        $table = $this->db()->get('catagories');
        dd($table);
        $this->view('index', [
            'title' => 'Главная страница',
            'name' => 'Артем'
        ]);
    }


}