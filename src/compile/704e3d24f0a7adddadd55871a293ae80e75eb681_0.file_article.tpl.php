<?php
/* Smarty version 5.8.0, created on 2026-05-14 05:37:28
  from 'file:components/article.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a055f981a16e0_15751224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '704e3d24f0a7adddadd55871a293ae80e75eb681' => 
    array (
      0 => 'components/article.tpl',
      1 => 1778737046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a055f981a16e0_15751224 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/components';
?><article class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition">
    <a href="/article/<?php echo $_smarty_tpl->getValue('article')['id'];?>
">
        <img src="<?php echo $_smarty_tpl->getValue('article')['image'];?>
"
        class="w-full h-52 object-cover">
    </a>
    <div class="p-6">

        <div class="flex items-center justify-between mb-4">
            

            <span class="text-sm text-gray-500">
                <?php echo $_smarty_tpl->getValue('article')['created_at'];?>

            </span>
        </div>

        <h3 class="text-2xl font-bold mb-4">
            <a href="/article/<?php echo $_smarty_tpl->getValue('article')['id'];?>
">
                <?php echo $_smarty_tpl->getValue('article')['title'];?>

            </a>
        </h3>

        <p class="text-gray-600 mb-6">
            <?php echo $_smarty_tpl->getValue('article')['short_description'];?>

        </p>

        <div class="flex items-center justify-between">
            <span class="text-gray-500 text-sm">
                👁 <?php echo $_smarty_tpl->getValue('article')['views'];?>
 View
            </span>

            <a href="/article/<?php echo $_smarty_tpl->getValue('article')['id'];?>
"
                class="text-blue-600 font-semibold hover:underline">
                Read →
            </a>
        </div>

    </div>
</article><?php }
}
