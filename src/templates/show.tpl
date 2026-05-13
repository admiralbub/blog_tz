{assign var="meta_title" value="Category"}
{extends file="layouts/main.tpl"}

{block name="content"}
     <article class="max-w-5xl mx-auto bg-white rounded-2xl shadow-sm overflow-hidden">

        <!-- IMAGE -->
        <img src="https://picsum.photos/1200/500"
             class="w-full h-[450px] object-cover">

        <!-- CONTENT -->
        <div class="p-8 md:p-12">

            <!-- META -->
            <div class="flex flex-wrap items-center gap-4 mb-6 text-sm">

                <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full">
                    Laravel
                </span>

                <span class="text-gray-500">
                    12.05.2026
                </span>

                <span class="text-gray-500">
                    👁 1450 просмотров
                </span>

            </div>

            <!-- TITLE -->
            <h1 class="text-5xl font-bold mb-8">
                Laravel Routing
            </h1>

            <!-- DESCRIPTION -->
            <p class="text-xl text-gray-600 mb-10">
                Подробный разбор маршрутизации и роутов в Laravel framework.
            </p>

            <!-- TEXT -->
            <div class="prose max-w-none">

                <p class="mb-6">
                    Routing в Laravel отвечает за обработку URL маршрутов.
                </p>

                <h2 class="text-3xl font-bold mt-10 mb-4">
                    Базовые роуты
                </h2>

                <p class="mb-6">
                    Роуты определяются в файле web.php.
                </p>

                <pre class="bg-gray-900 text-white p-6 rounded-2xl overflow-auto mb-8">
                    Route::get('/', function () {
                        return view('welcome');
                    });
                </pre>

                <h2 class="text-3xl font-bold mt-10 mb-4">
                    Route Parameters
                </h2>

                <p class="mb-6">
                    Laravel поддерживает динамические параметры маршрутов.
                </p>

                <blockquote class="border-l-4 border-blue-600 pl-4 italic text-gray-600 my-8">
                    Хорошая структура роутов делает проект более поддерживаемым.
                </blockquote>

            </div>

        </div>

    </article>

    <!-- RELATED POSTS -->
    <section class="max-w-5xl mx-auto mt-16">

        <div class="flex items-center justify-between mb-8">

            <h2 class="text-4xl font-bold">
                Похожие статьи
            </h2>

        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- RELATED -->
            <article class="bg-white rounded-2xl shadow-sm overflow-hidden">

                <img src="https://picsum.photos/600/400?11"
                     class="w-full h-52 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        Laravel Middleware
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Работа с middleware в Laravel.
                    </p>

                    <a href="#"
                       class="text-blue-600 font-semibold hover:underline">
                        Читать →
                    </a>

                </div>

            </article>

            <!-- RELATED -->
            <article class="bg-white rounded-2xl shadow-sm overflow-hidden">

                <img src="https://picsum.photos/600/400?12"
                     class="w-full h-52 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        Laravel Controllers
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Организация контроллеров в Laravel.
                    </p>

                    <a href="#"
                       class="text-blue-600 font-semibold hover:underline">
                        Читать →
                    </a>

                </div>

            </article>

            <!-- RELATED -->
            <article class="bg-white rounded-2xl shadow-sm overflow-hidden">

                <img src="https://picsum.photos/600/400?13"
                     class="w-full h-52 object-cover">

                <div class="p-6">

                    <h3 class="text-2xl font-bold mb-4">
                        Laravel Blade
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Использование Blade шаблонов.
                    </p>

                    <a href="#"
                       class="text-blue-600 font-semibold hover:underline">
                        Читать →
                    </a>

                </div>

            </article>

        </div>

    </section>
{/block}