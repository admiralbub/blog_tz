<?php
/* Smarty version 5.8.0, created on 2026-05-13 05:43:26
  from 'file:components/hero_section.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a040f7e6241e9_23033111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '629b4d422cbe109be45bbbe4404566850d9539ff' => 
    array (
      0 => 'components/hero_section.tpl',
      1 => 1778650951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a040f7e6241e9_23033111 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/components';
?><section class="max-w-7xl mx-auto px-6 py-20">
    <h1 class="text-5xl font-bold mb-6">
        <?php ob_start();
echo $_smarty_tpl->getValue('heading');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    </h1>
    <p class="text-xl text-gray-600">
        <?php ob_start();
echo $_smarty_tpl->getValue('text');
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

    </p>
</section><?php }
}
