{assign var="meta_title" value="Category"}
{extends file="layouts/main.tpl"}

{block name="content"}
    {include file="components/hero_section.tpl"
        heading="{$category.name}"
        text="{$category.description}"
    }

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

   

{/block}