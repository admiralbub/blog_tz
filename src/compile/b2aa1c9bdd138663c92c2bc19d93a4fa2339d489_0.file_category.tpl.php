<?php
/* Smarty version 5.8.0, created on 2026-05-14 07:55:20
  from 'file:category.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a057fe8087935_34696437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2aa1c9bdd138663c92c2bc19d93a4fa2339d489' => 
    array (
      0 => 'category.tpl',
      1 => 1778745317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/hero_section.tpl' => 1,
    'file:components/article.tpl' => 1,
    'file:components/pagination.tpl' => 1,
  ),
))) {
function content_6a057fe8087935_34696437 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
$_smarty_tpl->assign('meta_title', "Category", false, NULL);?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_19938228946a057fe8080b95_45990212', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/main.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_19938228946a057fe8080b95_45990212 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?>

    <?php $_smarty_tpl->renderSubTemplate("file:components/hero_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>((string)$_smarty_tpl->getValue('category')['name']),'text'=>((string)$_smarty_tpl->getValue('category')['description'])), (int) 0, $_smarty_current_dir);
?>
     <!-- SORT -->
    <div class="flex items-center justify-between mb-8">

        <h2 class="text-3xl font-bold">
            Articles
        </h2>

        <form method="GET">

            <select
                name="sort"
                onchange="this.form.submit()"
                class="bg-white border rounded-xl px-4 py-3 focus:outline-none"
            >

                <option
                    value="date"
                    <?php if ($_smarty_tpl->getValue('sort') == 'date') {?>selected<?php }?>
                >
                    By publication date
                </option>

                <option
                    value="views"
                    <?php if ($_smarty_tpl->getValue('sort') == 'views') {?>selected<?php }?>
                >
                    By views
                </option>

            </select>

        </form>

    </div>

      
    
    <!-- POSTS -->
    <div class="space-y-8">

        <?php if ($_smarty_tpl->getValue('category')['articles']) {?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')['articles'], 'article');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach0DoElse = false;
?>
                    <!-- POST -->
                    <?php $_smarty_tpl->renderSubTemplate("file:components/article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('article'=>$_smarty_tpl->getValue('article')), (int) 0, $_smarty_current_dir);
?>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    

            </div>
        <?php }?>

    </div>
    <?php $_smarty_tpl->renderSubTemplate("file:components/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('heading'=>((string)$_smarty_tpl->getValue('category')['name']),'text'=>((string)$_smarty_tpl->getValue('category')['description'])), (int) 0, $_smarty_current_dir);
?>
  

<?php
}
}
/* {/block "content"} */
}
