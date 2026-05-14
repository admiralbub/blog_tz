<?php
namespace App\Seeders;

use App\Kernel\Database\DatabaseInterface;

class DatabaseSeeder {
    public function __construct(
        private DatabaseInterface $db
    ) {}
    public function run(): void
    {


        (new CategorySeeder($this->db))
            ->run(10);

        (new ArticleSeeder($this->db))
            ->run(100);

        echo PHP_EOL;
        echo "Database seeding completed!" . PHP_EOL;
    }    
}