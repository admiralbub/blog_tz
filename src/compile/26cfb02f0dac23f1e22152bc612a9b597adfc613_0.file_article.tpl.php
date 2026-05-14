<?php
/* Smarty version 5.8.0, created on 2026-05-14 06:01:23
  from 'file:article.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a05653312f662_69578546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26cfb02f0dac23f1e22152bc612a9b597adfc613' => 
    array (
      0 => 'article.tpl',
      1 => 1778738482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a05653312f662_69578546 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
$_smarty_tpl->assign('meta_title', "Category", false, NULL);?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15403831976a056533128bd5_72225695', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/main.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_15403831976a056533128bd5_72225695 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?>

    
    <div class="container mx-auto px-4 py-12">
        <article class="max-w-5xl mx-auto bg-white rounded-2xl shadow-sm overflow-hidden">

            <!-- IMAGE -->
            <img src="<?php echo $_smarty_tpl->getValue('article')['image'];?>
"
                class="w-full h-[450px] object-cover">

            <!-- CONTENT -->
            <div class="p-8 md:p-12">

                <!-- META -->
                <div class="flex flex-wrap items-center gap-4 mb-6 text-sm">

                   
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('article')['categories'], 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
                       
                         <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full">
                            <?php echo $_smarty_tpl->getValue('category')['name'];?>

                        </span>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    <span class="text-gray-500">
                        <?php echo $_smarty_tpl->getValue('article')['created_at'];?>

                    </span>

                    <span class="text-gray-500">
                        👁 <?php echo $_smarty_tpl->getValue('article')['views'];?>
 View
                    </span>

                </div>

                <!-- TITLE -->
                <h1 class="text-5xl font-bold mb-8">
                    <?php echo $_smarty_tpl->getValue('article')['title'];?>

                </h1>

                <!-- DESCRIPTION -->
                <p class="text-xl text-gray-600 mb-10">
                    <?php echo $_smarty_tpl->getValue('article')['content'];?>

                </p>


            </div>

        </article>

      
    </div>
     
<?php
}
}
/* {/block "content"} */
}
