<?php
/* Smarty version 5.8.0, created on 2026-05-13 05:24:17
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a040b01378db3_95965388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94ad261647aa7bfeb6835379e098cb3d84cfcba3' => 
    array (
      0 => 'index.tpl',
      1 => 1778649856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a040b01378db3_95965388 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->assign('meta_title', "Главная", false, NULL);?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_8809236166a040b013784c3_07078772', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/main.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_8809236166a040b013784c3_07078772 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates';
?>


<section class="max-w-7xl mx-auto px-6 py-20">
    <h1 class="text-5xl font-bold mb-6">
        Добро пожаловать в DevBlog
    </h1>

    <p class="text-xl text-gray-600">
        Блог о современной веб-разработке.
    </p>
</section>



  <!-- CATEGORY -->
<section class="mb-16">

    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="text-4xl font-bold">
                Laravel
            </h2>

            <p class="text-gray-600 mt-2">
                Последние статьи по Laravel
            </p>
        </div>

        <a href="#"
            class="bg-blue-600 text-white px-5 py-3 rounded-xl hover:bg-blue-700 transition">
            Все статьи
        </a>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- POST -->
        <article class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition">
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
            </article>

            <!-- POST -->
            <article class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition">
                <img src="https://picsum.photos/600/400?2"
                     class="w-full h-52 object-cover">

                <div class="p-6">

                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">
                            Laravel
                        </span>

                        <span class="text-sm text-gray-500">
                            10.05.2026
                        </span>
                    </div>

                    <h3 class="text-2xl font-bold mb-4">
                        Laravel Controllers
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Как правильно организовать контроллеры.
                    </p>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 text-sm">
                            👁 982 просмотров
                        </span>

                        <a href="#"
                           class="text-blue-600 font-semibold hover:underline">
                            Читать →
                        </a>
                    </div>

                </div>
            </article>

            <!-- POST -->
            <article class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition">
                <img src="https://picsum.photos/600/400?3"
                     class="w-full h-52 object-cover">

                <div class="p-6">

                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">
                            Laravel
                        </span>

                        <span class="text-sm text-gray-500">
                            08.05.2026
                        </span>
                    </div>

                    <h3 class="text-2xl font-bold mb-4">
                        Laravel Middleware
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Работа с middleware в Laravel приложениях.
                    </p>

                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 text-sm">
                            👁 641 просмотров
                        </span>

                        <a href="#"
                           class="text-blue-600 font-semibold hover:underline">
                            Читать →
                        </a>
                    </div>

                </div>
            </article>

        </div>
    </section>

<?php
}
}
/* {/block "content"} */
}
