<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;
use App\Kernel\Database\DatabaseInterface;
class HomeController extends Controller
{
  
    public function index()
    {
        $categories = $this->db()->get('categories');
        $this->view('index', [
            'title' => 'Главная страница',
            'name' => 'Артем',
            'categories'=>$categories
        ]);
    }


}