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

       {include file="components/article.tpl"
            post=""
        }
        {include file="components/article.tpl"
            post=""
        }
        {include file="components/article.tpl"
            post=""
        }

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