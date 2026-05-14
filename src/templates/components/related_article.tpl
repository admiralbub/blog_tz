<!-- RELATED -->
<article class="bg-white rounded-2xl shadow-sm overflow-hidden">
    <a href="/article/{$article.id}">
        <img src="{$article.image}"
        class="w-full h-52 object-cover">
    </a>
    <div class="p-6">
        <a href="/article/{$article.id}">
            <h3 class="text-2xl font-bold mb-4">
                {$article.title}
            </h3>
        </a>
        <p class="text-gray-600 mb-6">
            {$article.short_description}
        </p>

        <a href="/article/{$article.id}"
            class="text-blue-600 font-semibold hover:underline">
            Read →
         </a>

     </div>

</article>