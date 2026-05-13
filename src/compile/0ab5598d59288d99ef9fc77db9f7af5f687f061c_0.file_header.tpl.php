<?php
/* Smarty version 5.8.0, created on 2026-05-12 16:50:50
  from 'file:layouts/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a035a6a3557b5_20206682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab5598d59288d99ef9fc77db9f7af5f687f061c' => 
    array (
      0 => 'layouts/header.tpl',
      1 => 1778604629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a035a6a3557b5_20206682 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/layouts';
?><!-- HOME PAGE -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? "Мой сайт" ?? null : $tmp);?>
</title>

    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- HEADER -->
    <header class="bg-white border-b sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-bold">DevBlog</h1>

            <nav class="hidden md:flex items-center gap-6">
                <a href="#" class="hover:text-blue-600">Главная</a>
                <a href="#" class="hover:text-blue-600">Категории</a>
                <a href="#" class="hover:text-blue-600">Контакты</a>
            </nav>

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl">
                Подписаться
            </button>
        </div>
    </header>
</body>
</html><?php }
}
