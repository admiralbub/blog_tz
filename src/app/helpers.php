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

function show404()
{
    $smarty = new Smarty();

    $smarty->setTemplateDir(__DIR__ . '/../templates');
    $smarty->setCompileDir(__DIR__ . '/../var/compile');
    $smarty->setCacheDir(__DIR__ . '/../var/cache');

    http_response_code(404);

    $smarty->display('errors/404.tpl');
    exit;
}