{assign var="meta_title" value="Category"}
{extends file="layouts/main.tpl"}

{block name="content"}
    
    <div class="container mx-auto px-4 py-12">
        <article class="max-w-5xl mx-auto bg-white rounded-2xl shadow-sm overflow-hidden">

            <!-- IMAGE -->
            <img src="{$article.image}"
                class="w-full h-[450px] object-cover">

            <!-- CONTENT -->
            <div class="p-8 md:p-12">

                <!-- META -->
                <div class="flex flex-wrap items-center gap-4 mb-6 text-sm">

                   
                    {foreach $article.categories as $category}
                       
                         <span class="bg-blue-100 text-blue-600 px-4 py-1 rounded-full">
                            {$category.name}
                        </span>
                    {/foreach}
                    <span class="text-gray-500">
                        {$article.created_at}
                    </span>

                    <span class="text-gray-500">
                        👁 {$article.views} View
                    </span>

                </div>

                <!-- TITLE -->
                <h1 class="text-5xl font-bold mb-8">
                    {$article.title}
                </h1>

                <!-- DESCRIPTION -->
                <p class="text-xl text-gray-600 mb-10">
                    {$article.content}
                </p>


            </div>

        </article>

      
    </div>
     
{/block}