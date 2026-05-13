<?php
/* Smarty version 5.8.0, created on 2026-05-13 05:46:28
  from 'file:layouts/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0410342b4425_74037385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b26a38ec5c399b276702d723e1e1c73ebda258d' => 
    array (
      0 => 'layouts/main.tpl',
      1 => 1778651186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0410342b4425_74037385 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/layouts';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!-- HOME PAGE -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (($tmp = (($tmp = $_smarty_tpl->getValue('meta_title') ?? null)===null||$tmp==='' ? $_smarty_tpl->getValue('title') ?? null : $tmp) ?? null)===null||$tmp==='' ? "Мой сайт" ?? null : $tmp);?>
</title>

    <link href="/assets/css/output.css" rel="stylesheet">
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
    <main class="container mx-auto px-4 py-12">
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20898434236a0410342b3c41_62476887', "content");
?>

    </main>
    <!-- FOOTER -->
    <footer class="bg-white border-t mt-16">
        <div class="container mx-auto px-4 py-6 text-center text-gray-500">
            © 2026 MyBlog. Все права защищены.
        </div>
    </footer>
</body>
</html><?php }
/* {block "content"} */
class Block_20898434236a0410342b3c41_62476887 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/layouts';
}
}
/* {/block "content"} */
}
