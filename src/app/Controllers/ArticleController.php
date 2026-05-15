<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;
use App\Kernel\Database\DatabaseInterface;
use App\Kernel\View\View;
use App\Repositories\Article\ArticleRepository;

class ArticleController extends Controller
{
 //   private ArticleRepository $articles;


    public function show(int $id): void
    {
        
        $articles = new ArticleRepository($this->db());
        $article = $articles->find($id);

        if (!$article) {
            View::error();
        }

        $relatedArticles = $articles
            ->getRelatedArticles($id);

        $this->view('article', [
            'article' => $article,
            'relatedArticles' => $relatedArticles,
        ]);
    }
}