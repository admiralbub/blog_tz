{assign var="meta_title" value="Category"}
{extends file="layouts/main.tpl"}

{block name="content"}
    {include file="components/hero_section.tpl"
        heading="{$category.name}"
        text="{$category.description}"
    }
     <!-- SORT -->
    <div class="flex items-center justify-between mb-8">

        <h2 class="text-3xl font-bold">
            Articles
        </h2>

        <form method="GET">

            <select
                name="sort"
                onchange="this.form.submit()"
                class="bg-white border rounded-xl px-4 py-3 focus:outline-none"
            >

                <option
                    value="date"
                    {if $sort == 'date'}selected{/if}
                >
                    By publication date
                </option>

                <option
                    value="views"
                    {if $sort == 'views'}selected{/if}
                >
                    By views
                </option>

            </select>

        </form>

    </div>

      
    
    <!-- POSTS -->
    <div class="space-y-8">

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

    </div>
    {include file="components/pagination.tpl"
        page="{$page}"
        totalPages = "{$totalPages}"
    }
  

{/block}