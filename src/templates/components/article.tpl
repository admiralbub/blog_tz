<article class="bg-white rounded-2xl shadow-sm overflow-hidden hover:shadow-lg transition">
    <a href="/article/{$article.id}">
        <img src="{$article.image}"
        class="w-full h-52 object-cover">
    </a>
    <div class="p-6">

        <div class="flex items-center justify-between mb-4">
            

            <span class="text-sm text-gray-500">
                {$article.created_at}
            </span>
        </div>

        <h3 class="text-2xl font-bold mb-4">
            <a href="/article/{$article.id}">
                {$article.title}
            </a>
        </h3>

        <p class="text-gray-600 mb-6">
            {$article.short_description}
        </p>

        <div class="flex items-center justify-between">
            <span class="text-gray-500 text-sm">
                👁 {$article.views} View
            </span>

            <a href="/article/{$article.id}"
                class="text-blue-600 font-semibold hover:underline">
                Read →
            </a>
        </div>

    </div>
</article>