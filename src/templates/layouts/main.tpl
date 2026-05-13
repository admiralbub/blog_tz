<!-- HOME PAGE -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$meta_title|default:$title|default:"Мой сайт"}</title>

    <link href="/assets/css/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- HEADER -->
    <header class="bg-white border-b sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <h1 class="text-2xl font-bold">DevBlog</h1>

            <nav class="hidden md:flex items-center gap-6">
                <a href="#" class="hover:text-blue-600">Главная</a>
                <a href="#" class="hover:text-blue-600">Категории</a>
                <a href="#" class="hover:text-blue-600">Контакты</a>
            </nav>

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl">
                Подписаться
            </button>
        </div>
    </header>
    <main class="container mx-auto px-4 py-12">
        {block name="content"}{/block}
    </main>
    <!-- FOOTER -->
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
    </footer>
</body>
</html>