<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;
use App\Repositories\Category\CategoryRepository;
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
        $category = new CategoryRepository($this->db());
        $categoryFind = $category->find($id);


        if(!$categoryFind) {
            View::error();
        }
        $sort = $_GET['sort'] ?? 'date';

        $page = max(1, (int) ($_GET['page'] ?? 1));

        $offset = ($page - 1) * $this->limit;

        $categoryFind['articles'] = $category->getArticles(
            $categoryFind['id'],
            $this->sortBy($sort),
            $this->limit,
            $offset
        );

        $totalArticles = $category->countArticles(
            $categoryFind['id']
        );

        $totalPages = (int) ceil($totalArticles / $this->limit);

        $this->view('category', [
            'category'   => $categoryFind,
            'sort'       => $sort,
            'page'       => $page,
            'totalPages' => $totalPages
        ]);
    }
}