<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;
use App\Kernel\Database\DatabaseInterface;
use App\Repositories\Category\CategoryRepository;
class HomeController extends Controller
{
  
    public function index()
    {
       
        $categories = new CategoryRepository($this->db());
        $this->view('index', [
            'categories'=>$categories->all()
        ]);
    }


}