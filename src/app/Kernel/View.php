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
}
?>