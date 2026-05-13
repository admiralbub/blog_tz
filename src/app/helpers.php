<?php
use App\Kernel\View;

function view($template, $data = [])
{
    $smarty = View::get();
    foreach ($data as $key => $value) {
        $smarty->assign($key, $value);
    }

    $smarty->display($template . '.tpl');
}

