<?php

namespace App\Kernel\View;

use Smarty\Smarty;

interface ViewInterface
{
    public static function get(): Smarty;

    public static function render(
        string $template,
        array $data = [],
        int $code = 200
    ): void;

    public static function error(int $code = 404): void;
}