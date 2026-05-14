<?php
/* Smarty version 5.8.0, created on 2026-05-13 12:56:13
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0474ed6be111_62079265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ad261647aa7bfeb6835379e098cb3d84cfcba3' => 
    array (
      0 => 'index.tpl',
      1 => 1778676972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/hero_section.tpl' => 1,
    'file:components/article.tpl' => 1,
  ),
))) {
function content_6a0474ed6be111_62079265 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->assign('meta_title', "Главная", false, NULL);?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8022969736a0474ed6b6685_77857501', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/main.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_8022969736a0474ed6b6685_77857501 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?>



<?php $_smarty_tpl->renderSubTemplate("file:components/hero_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>"Добро пожаловать в DevBlog",'text'=>"Блог о современной веб-разработке."), (int) 0, $_smarty_current_dir);
?>


<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('categories'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
    <!-- CATEGORY -->
    <section class="mb-16">

        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-4xl font-bold">
                    <?php echo $_smarty_tpl->getValue('category')['name'];?>

                </h2>

                <p class="text-gray-600 mt-2">
                    <?php echo $_smarty_tpl->getValue('category')['description'];?>

                </p>
            </div>

            <a href="#"
                class="bg-blue-600 text-white px-5 py-3 rounded-xl hover:bg-blue-700 transition">
                Все статьи
            </a>
        </div>
        
        <?php if ($_smarty_tpl->getValue('category')['articles']) {?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')['articles'], 'article');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach1DoElse = false;
?>
                    <!-- POST -->
                    <?php $_smarty_tpl->renderSubTemplate("file:components/article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->getValue('article')), (int) 0, $_smarty_current_dir);
?>
                 <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                

            </div>
        <?php }?>
    </section>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);
}
}
/* {/block "content"} */
}
