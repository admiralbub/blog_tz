

{assign var="meta_title" value="Главная"}
{extends file="layouts/main.tpl"}

{block name="content"}


{include file="components/hero_section.tpl"
    heading="Добро пожаловать в DevBlog"
    text="Блог о современной веб-разработке."
}



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
</section>

{/block}