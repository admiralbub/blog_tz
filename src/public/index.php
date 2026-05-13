<?php

define('APP_PATH', dirname(__DIR__));

require_once APP_PATH . '/vendor/autoload.php';

require_once APP_PATH . '/app/helpers.php';

use App\Kernel\App;

$app = new App();
$app->run();


?>