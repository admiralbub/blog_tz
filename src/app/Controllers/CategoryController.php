<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;

class CategoryController extends Controller
{
    private function sortBy(string $sort): array {
        return match ($sort) {

            'views' => [
                'views' => 'DESC'
            ],

            default => [
                'created_at' => 'DESC'
            ]
        };
    }
    public function index($id) {
        $category = $this->db()->first('categories', [
            'id' => $id
        ]);
        if(!$category) {
            View::error();
        }
        $sort = $_GET['sort'] ?? 'date';
   
        $category['articles'] = $this->db()->getRelated(
            'articles',
            'article_category',
            'article_id',
            'category_id',
            $category['id'],
            $this->sortBy($sort),
            
        );
      
        $this->view('category', [
            'category'=>$category,
            'sort'=>$sort
        ]);
    }
}