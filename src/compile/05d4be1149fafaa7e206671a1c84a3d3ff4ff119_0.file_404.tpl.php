<?php
/* Smarty version 5.8.0, created on 2026-05-13 05:27:06
  from 'file:errors/404.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a040baa142347_99482315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05d4be1149fafaa7e206671a1c84a3d3ff4ff119' => 
    array (
      0 => 'errors/404.tpl',
      1 => 1778650023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a040baa142347_99482315 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/errors';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->assign('meta_title', "404 Not Found", false, NULL);?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10883198896a040baa141cb5_95897359', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/main.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_10883198896a040baa141cb5_95897359 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/errors';
?>

    <section class="max-w-7xl mx-auto px-6 py-20">
        <h1 class="text-5xl font-bold mb-6">
            404 Not Found
        </h1>

        
    </section>
<?php
}
}
/* {/block "content"} */
}
