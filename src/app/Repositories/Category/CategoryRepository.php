<?php

namespace App\Repositories\Category;


use App\Kernel\Database\DatabaseInterface;

class CategoryRepository
{
    public function __construct(
        private DatabaseInterface $db
    ) {}
    public function find(int $id): ?array
    {
        return $this->db->first('categories', [
            'id' => $id
        ]);
    }    
    public function all(): ?array
    {
        $categories = $this->db->get('categories');

        foreach ($categories as &$category) {

            $category['articles'] = $this->db->getRelated(
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

        return $categories;
    }
    public function getArticles(
        int $categoryId,
        array $sort,
        int $limit,
        int $offset
    ): array {
        return $this->db->getRelated(
            'articles',
            'article_category',
            'article_id',
            'category_id',
            $categoryId,
            $sort,
            $limit,
            $offset
        );
    }

    public function countArticles(int $categoryId): int
    {
        return count(
            $this->db->getRelated(
                'articles',
                'article_category',
                'article_id',
                'category_id',
                $categoryId
            )
        );
    }
}