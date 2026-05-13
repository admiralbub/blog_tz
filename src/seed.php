<?php
define('APP_PATH', __DIR__);
require_once __DIR__ . '/vendor/autoload.php';

use App\Kernel\Config\Config;
use App\Kernel\Database\Database;
use App\Seeders\DatabaseSeeder;

$config = new Config();

$db = new Database($config);

$seeder = new DatabaseSeeder($db);

$seeder->run();