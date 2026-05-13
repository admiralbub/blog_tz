<?php
/* Smarty version 5.8.0, created on 2026-05-13 05:49:54
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a041102905215_13703760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ad261647aa7bfeb6835379e098cb3d84cfcba3' => 
    array (
      0 => 'index.tpl',
      1 => 1778651377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/hero_section.tpl' => 1,
    'file:components/article.tpl' => 3,
  ),
))) {
function content_6a041102905215_13703760 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->assign('meta_title', "Главная", false, NULL);?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_16577590156a041102902f62_27202900', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/main.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_16577590156a041102902f62_27202900 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?>



<?php $_smarty_tpl->renderSubTemplate("file:components/hero_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>"Добро пожаловать в DevBlog",'text'=>"Блог о современной веб-разработке."), (int) 0, $_smarty_current_dir);
?>



<!-- CATEGORY -->
<section class="mb-16">

    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="text-4xl font-bold">
                Laravel
            </h2>

            <p class="text-gray-600 mt-2">
                Последние статьи по Laravel
            </p>
        </div>

        <a href="#"
            class="bg-blue-600 text-white px-5 py-3 rounded-xl hover:bg-blue-700 transition">
            Все статьи
        </a>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- POST -->
        <?php $_smarty_tpl->renderSubTemplate("file:components/article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>''), (int) 0, $_smarty_current_dir);
?>

        <?php $_smarty_tpl->renderSubTemplate("file:components/article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>''), (int) 0, $_smarty_current_dir);
?>
         <?php $_smarty_tpl->renderSubTemplate("file:components/article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>''), (int) 0, $_smarty_current_dir);
?>

    </div>
</section>

<?php
}
}
/* {/block "content"} */
}
