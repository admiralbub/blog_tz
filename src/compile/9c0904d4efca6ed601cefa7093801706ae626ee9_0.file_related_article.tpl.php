<?php
/* Smarty version 5.8.0, created on 2026-05-14 08:45:09
  from 'file:components/related_article.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a058b9547f494_59983203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c0904d4efca6ed601cefa7093801706ae626ee9' => 
    array (
      0 => 'components/related_article.tpl',
      1 => 1778748306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a058b9547f494_59983203 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/components';
?><!-- RELATED -->
<article class="bg-white rounded-2xl shadow-sm overflow-hidden">
    <a href="/article/<?php echo $_smarty_tpl->getValue('article')['id'];?>
">
        <img src="<?php echo $_smarty_tpl->getValue('article')['image'];?>
"
        class="w-full h-52 object-cover">
    </a>
    <div class="p-6">
        <a href="/article/<?php echo $_smarty_tpl->getValue('article')['id'];?>
">
            <h3 class="text-2xl font-bold mb-4">
                <?php echo $_smarty_tpl->getValue('article')['title'];?>

            </h3>
        </a>
        <p class="text-gray-600 mb-6">
            <?php echo $_smarty_tpl->getValue('article')['short_description'];?>

        </p>

        <a href="/article/<?php echo $_smarty_tpl->getValue('article')['id'];?>
"
            class="text-blue-600 font-semibold hover:underline">
            Read →
         </a>

     </div>

</article><?php }
}
