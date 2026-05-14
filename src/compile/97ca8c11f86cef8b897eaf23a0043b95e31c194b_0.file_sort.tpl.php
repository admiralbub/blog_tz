<?php
/* Smarty version 5.8.0, created on 2026-05-14 08:19:21
  from 'file:components/sort.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a058589216e73_36082076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97ca8c11f86cef8b897eaf23a0043b95e31c194b' => 
    array (
      0 => 'components/sort.tpl',
      1 => 1778746742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a058589216e73_36082076 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/components';
?> <form method="GET">

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

</form><?php }
}
