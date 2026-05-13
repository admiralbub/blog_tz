<?php
namespace App\Seeders;

use App\Kernel\Database\DatabaseInterface;
use Faker\Factory;
use PDO;

class CategorySeeder
{
    public function __construct(
        private DatabaseInterface $db
    ) {}

    public function run(int $count = 5): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++) {

            $this->db->insert('categories', [
                'name' => ucfirst($faker->unique()->word()),
                'description' => $faker->sentence(10)
            ]);
        }

        echo "Categories seeded: {$count}" . PHP_EOL;
    }
}
?>