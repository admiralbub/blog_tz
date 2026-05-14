<?php

namespace App\Controllers;
use App\Kernel\Controller\Controller;
use App\Kernel\Database\DatabaseInterface;
use App\Kernel\View\View;
class ArticleController extends Controller
{
    public function show($id) {
        $article = $this->db()->first('articles',[
            "id"=>$id
        ]);
        if(!$article) {
            View::error();
        }
        $article['categories'] = $this->db()->getRelated(
            'categories',
            'article_category',
            'category_id',
            'article_id',
            $article['id']
        );
        $this->view('article', [
            'article'=>$article
        ]);
    }
}