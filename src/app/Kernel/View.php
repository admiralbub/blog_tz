<?php
namespace App\Kernel;
use Smarty\Smarty;
class View {
    private static ?Smarty $smarty = null;

    public static function get(): Smarty
    {
        if (!self::$smarty) {
            $smarty = new Smarty();

            $smarty->setTemplateDir(APP_PATH . '/templates/');
            $smarty->setCompileDir(APP_PATH . '/compile/');
            $smarty->setCacheDir(APP_PATH . '/cache/');

            $smarty->caching = false;
            $smarty->debugging = false;

            self::$smarty = $smarty;
        }

        return self::$smarty;
    }
    public static function render(string $template, array $data = [], int $code = 200): void
    {
        http_response_code($code);

        $smarty = self::get();

        foreach ($data as $key => $value) {
            $smarty->assign($key, $value);
        }

        $smarty->display($template);
        exit;
    }

    public static function error(int $code = 404): void
    {
        self::render("errors/{$code}.tpl", [], $code);
    }
}
?>