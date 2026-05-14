<?php

namespace App\Repositories\Article;

use App\Kernel\Database\DatabaseInterface;

class ArticleRepository
{
    public function __construct(
        private DatabaseInterface $db
    ) {}

    public function find(int $id): ?array
    {
        $article = $this->db->first('articles', [
            'id' => $id
        ]);
    
        if (!$article) {
            return null;
        }
    
        $article['categories'] = $this->db->getRelated(
            'categories',
            'article_category',
            'category_id',
            'article_id',
            $article['id']
        );
    
        return $article;
    }

    public function latest(int $limit = 3): array
    {
        return $this->db->get(
            'articles',
            order: ['created_at' => 'DESC'],
            limit: $limit
        );
    }

    public function getRelatedArticles(int $articleId): array
    {
        $sql = "
            SELECT DISTINCT a.*
            FROM articles a
            JOIN article_category ac
                ON ac.article_id = a.id
            WHERE ac.category_id IN (
                SELECT category_id
                FROM article_category
                WHERE article_id = :article_id
            )
            AND a.id != :article_id
            ORDER BY a.created_at DESC
            LIMIT 3
        ";

        return $this->db->query($sql, [
            'article_id' => $articleId
        ]);
    }
}