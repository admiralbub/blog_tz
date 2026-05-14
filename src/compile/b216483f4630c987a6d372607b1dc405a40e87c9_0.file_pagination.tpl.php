<?php
/* Smarty version 5.8.0, created on 2026-05-14 08:08:53
  from 'file:components/pagination.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a058315420780_89023093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b216483f4630c987a6d372607b1dc405a40e87c9' => 
    array (
      0 => 'components/pagination.tpl',
      1 => 1778746131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a058315420780_89023093 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/components';
?><!-- PAGINATION -->
<div class="flex gap-2 mt-10">

        <?php if ($_smarty_tpl->getValue('page') > 1) {?>

        <a
            href="?page=<?php echo $_smarty_tpl->getValue('page')-1;?>
&sort=<?php echo $_smarty_tpl->getValue('sort');?>
"
            class="px-4 py-2 border rounded-xl"
        >
            Prev
        </a>

    <?php }?>

        <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getValue('totalPages')+1 - (1) : 1-($_smarty_tpl->getValue('totalPages'))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>

        <a
            href="?page=<?php echo $_smarty_tpl->getValue('i');?>
&sort=<?php echo $_smarty_tpl->getValue('sort');?>
"
            class="px-4 py-2 border rounded-xl
            <?php if ($_smarty_tpl->getValue('i') == $_smarty_tpl->getValue('page')) {?> bg-blue-600 text-white <?php }?>"
        >
            <?php echo $_smarty_tpl->getValue('i');?>

        </a>

    <?php }
}
?>

        <?php if ($_smarty_tpl->getValue('page') < $_smarty_tpl->getValue('totalPages')) {?>

        <a
            href="?page=<?php echo $_smarty_tpl->getValue('page')+1;?>
&sort=<?php echo $_smarty_tpl->getValue('sort');?>
"
            class="px-4 py-2 border rounded-xl"
        >
            Next
        </a>

    <?php }?>

</div><?php }
}
