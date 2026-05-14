<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;
use App\Kernel\Database\DatabaseInterface;
class HomeController extends Controller
{
  
    public function index()
    {
        $categories = $this->db()->get('categories');
        foreach ($categories as &$category) {

            $category['articles'] = $this->db()->getRelated(
                'articles',
                'article_category',
                'article_id',
                'category_id',
                $category['id'],
                [
                    'created_at' => 'DESC'
                ],
                3
            );
        }

        $this->view('index', [
            'categories'=>$categories
        ]);
    }


}