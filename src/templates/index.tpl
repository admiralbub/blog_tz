

{assign var="meta_title" value="Home"}
{extends file="layouts/main.tpl"}

{block name="content"}


{include file="components/hero_section.tpl"
    heading="Welcome to the DevBlog"
    text="A blog about modern web development."
}


{foreach $categories as $category}
    <!-- CATEGORY -->
    <section class="mb-16">

        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-4xl font-bold">
                    {$category.name}
                </h2>

                <p class="text-gray-600 mt-2">
                    {$category.description}
                </p>
            </div>

            <a href="/category/{$category.id}"
                class="bg-blue-600 text-white px-5 py-3 rounded-xl hover:bg-blue-700 transition">
                All article
            </a>
        </div>
        
        {if $category.articles}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                {foreach $category.articles as $article}
                    <!-- POST -->
                    {include file="components/article.tpl"
                        article=$article
                    }
                 {/foreach}
                

            </div>
        {/if}
    </section>
{/foreach}
{/block}