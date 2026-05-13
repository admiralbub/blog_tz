<?php
namespace App\Seeders;

use App\Kernel\Database\DatabaseInterface;
use Faker\Factory;
use PDO;

class ArticleSeeder
{
    public function __construct(
        private DatabaseInterface $db
    ) {}

    public function run(int $count = 10): void
    {
        $faker = Factory::create();

        $categories = $this->db->get('categories');

        if (empty($categories)) {
            exit("Categories not found." . PHP_EOL);
        }

        for ($i = 0; $i < $count; $i++) {

            $articleId = $this->db->insert('articles', [
                'title' => ucfirst($faker->sentence(4)),
                'short_description' => $faker->sentence(12),
                'content' => $faker->paragraphs(6, true),
                'image' => 'https://picsum.photos/800/600?random=' . $i,
                'views' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ]);

            shuffle($categories);

            $randomCategories = array_slice(
                $categories,
                0,
                rand(1, 3)
            );

            foreach ($randomCategories as $category) {

                $this->db->insert('article_category', [
                    'article_id' => $articleId,
                    'category_id' => $category['id']
                ]);
            }
        }

        echo "Articles seeded: {$count}" . PHP_EOL;
    }
}