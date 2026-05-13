<?php
/* Smarty version 5.8.0, created on 2026-05-13 05:49:24
  from 'file:components/article.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a0410e44cb865_07909981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '704e3d24f0a7adddadd55871a293ae80e75eb681' => 
    array (
      0 => 'components/article.tpl',
      1 => 1778651311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a0410e44cb865_07909981 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/components';
?><article class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition">
    <img src="https://picsum.photos/600/400?1"
    class="w-full h-52 object-cover">

    <div class="p-6">

        <div class="flex items-center justify-between mb-4">
            <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">
                Laravel
            </span>

            <span class="text-sm text-gray-500">
                12.05.2026
            </span>
        </div>

        <h3 class="text-2xl font-bold mb-4">
            Laravel Routing
        </h3>

        <p class="text-gray-600 mb-6">
            Разбираем маршрутизацию и роуты в Laravel.
        </p>

        <div class="flex items-center justify-between">
            <span class="text-gray-500 text-sm">
                👁 1450 просмотров
            </span>

            <a href="#"
                class="text-blue-600 font-semibold hover:underline">
                Читать →
            </a>
        </div>

    </div>
</article><?php }
}
