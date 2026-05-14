<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;

class CategoryController extends Controller
{
    public $limit = 6;
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

        $page = max(1, (int) ($_GET['page'] ?? 1));
        

        // OFFSET
        $offset = ($page - 1) * $this->limit;
     
        $category['articles'] = $this->db()->getRelated(
            'articles',
            'article_category',
            'article_id',
            'category_id',
            $category['id'],
            $this->sortBy($sort),
            $this->limit,
            $offset
            
        );

        $totalArticles = count(
            $this->db()->getRelated(
                'articles',
                'article_category',
                'article_id',
                'category_id',
                $category['id']
            )
        );
        $totalPages = (int) ceil($totalArticles / $this->limit);
      
        $this->view('category', [
            'category'=>$category,
            'sort'=>$sort,
            'page' => $page,
            'totalPages' => $totalPages
        ]);
    }
}