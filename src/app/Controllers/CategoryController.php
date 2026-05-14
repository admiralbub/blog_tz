<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;

class CategoryController extends Controller
{
    public function index($id) {
        $category = $this->db()->first('categories', [
            'id' => $id
        ]);
        if(!$category) {
            View::error();
        }
        $category['articles'] = $this->db()->getRelated(
            'articles',
            'article_category',
            'article_id',
            'category_id',
            $category['id'],
            [
                'created_at' => 'DESC'
            ],
        );
      
        $this->view('category', [
            'category'=>$category
        ]);
    }
}