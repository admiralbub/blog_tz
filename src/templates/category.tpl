{assign var="meta_title" value="Category"}
{extends file="layouts/main.tpl"}

{block name="content"}
     <!-- SORT -->
    <div class="flex items-center justify-between mb-8">

        <h2 class="text-3xl font-bold">
            Статьи
        </h2>

        <select class="bg-white border rounded-xl px-4 py-3 focus:outline-none">
            <option>По дате публикации</option>
            <option>По просмотрам</option>
        </select>

    </div>

    <!-- POSTS -->
    <div class="space-y-8">

        <!-- POST -->
        <article class="bg-white rounded-2xl shadow-sm overflow-hidden md:flex">

            <img src="https://picsum.photos/500/350?1"
                 class="w-full md:w-80 h-64 object-cover">

            <div class="p-6 flex flex-col justify-between">

                <div>

                    <div class="flex items-center gap-4 mb-4 text-sm text-gray-500">
                        <span>12.05.2026</span>
                        <span>👁 1450 просмотров</span>
                    </div>

                    <h3 class="text-3xl font-bold mb-4">
                        Laravel Routing
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Подробный разбор маршрутизации и роутов в Laravel.
                    </p>

                </div>

                <a href="#"
                   class="text-blue-600 font-semibold hover:underline">
                    Читать статью →
                </a>

            </div>

        </article>

        <!-- POST -->
        <article class="bg-white rounded-2xl shadow-sm overflow-hidden md:flex">

            <img src="https://picsum.photos/500/350?2"
                 class="w-full md:w-80 h-64 object-cover">

            <div class="p-6 flex flex-col justify-between">

                <div>

                    <div class="flex items-center gap-4 mb-4 text-sm text-gray-500">
                        <span>10.05.2026</span>
                        <span>👁 982 просмотров</span>
                    </div>

                    <h3 class="text-3xl font-bold mb-4">
                        Laravel Controllers
                    </h3>

                    <p class="text-gray-600 mb-6">
                        Как организовать архитектуру контроллеров.
                    </p>

                </div>

                <a href="#"
                   class="text-blue-600 font-semibold hover:underline">
                    Читать статью →
                </a>

            </div>

        </article>

    </div>

    <!-- PAGINATION -->
    <div class="flex justify-center mt-12">

        <div class="flex items-center gap-2">

            <a href="#"
               class="bg-white border px-4 py-2 rounded-xl hover:bg-gray-100">
                ←
            </a>

            <a href="#"
               class="bg-blue-600 text-white px-4 py-2 rounded-xl">
                1
            </a>

            <a href="#"
               class="bg-white border px-4 py-2 rounded-xl hover:bg-gray-100">
                2
            </a>

            <a href="#"
               class="bg-white border px-4 py-2 rounded-xl hover:bg-gray-100">
                3
            </a>

            <a href="#"
               class="bg-white border px-4 py-2 rounded-xl hover:bg-gray-100">
                →
            </a>

        </div>

    </div>

{/block}