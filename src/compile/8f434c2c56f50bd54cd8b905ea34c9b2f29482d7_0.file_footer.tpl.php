<?php
/* Smarty version 5.8.0, created on 2026-05-12 16:52:17
  from 'file:layouts/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_6a035ac1132a07_89754857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f434c2c56f50bd54cd8b905ea34c9b2f29482d7' => 
    array (
      0 => 'layouts/footer.tpl',
      1 => 1778604723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6a035ac1132a07_89754857 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/var/www/html/templates/layouts';
?><!-- FOOTER -->
<footer class="bg-gray-900 text-white mt-20">
    <div class="max-w-7xl mx-auto px-6 py-16">

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- LOGO -->
            <div>
                <h2 class="text-3xl font-bold mb-4">
                    DevBlog
                </h2>

                <p class="text-gray-400 leading-relaxed">
                    Блог о Laravel, PHP, Frontend разработке и современной архитектуре веб-приложений.
                </p>
            </div>

            <!-- NAVIGATION -->
            <div>
                <h3 class="text-xl font-semibold mb-5">
                    Навигация
                </h3>

                <ul class="space-y-3 text-gray-400">
                    <li>
                        <a href="#" class="hover:text-white transition">
                            Главная
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Категории
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Статьи
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Контакты
                        </a>
                    </li>
                </ul>
            </div>

            <!-- CATEGORIES -->
            <div>
                <h3 class="text-xl font-semibold mb-5">
                    Категории
                </h3>

                <ul class="space-y-3 text-gray-400">
                    <li>
                        <a href="#" class="hover:text-white transition">
                            Laravel
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            PHP
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            Frontend
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-white transition">
                            DevOps
                        </a>
                    </li>
                </ul>
            </div>

            <!-- SUBSCRIBE -->
            <div>
                <h3 class="text-xl font-semibold mb-5">
                    Подписка
                </h3>

                <p class="text-gray-400 mb-4">
                    Получайте новые статьи на email.
                </p>

                <form class="space-y-4">
                    <input
                        type="email"
                        placeholder="Ваш email"
                        class="w-full px-4 py-3 rounded-xl bg-gray-800 border border-gray-700 text-white outline-none focus:border-blue-500"
                    >

                    <button
                        type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 transition px-5 py-3 rounded-xl font-semibold"
                    >
                        Подписаться
                    </button>
                </form>
            </div>

        </div>

        <!-- BOTTOM -->
        <div class="border-t border-gray-800 mt-14 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">

            <p class="text-gray-500 text-sm">
                © 2026 DevBlog. Все права защищены.
            </p>

            <div class="flex items-center gap-5 text-gray-400 text-sm">
                <a href="#" class="hover:text-white transition">
                    Privacy Policy
                </a>

                <a href="#" class="hover:text-white transition">
                    Terms
                </a>

                <a href="#" class="hover:text-white transition">
                    GitHub
                </a>
            </div>

        </div>

    </div>
</footer><?php }
}
