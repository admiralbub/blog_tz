{assign var="meta_title" value="Category"}
{extends file="layouts/main.tpl"}

{block name="content"}
    

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

   

{/block}