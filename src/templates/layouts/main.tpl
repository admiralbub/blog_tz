<!-- HOME PAGE -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$meta_title|default:$title|default:"Мой сайт"}</title>

    <link href="/assets/css/output.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <!-- HEADER -->
    <header class="bg-white  sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/">
                <span class="text-2xl font-bold">DevBlog</span>
            </a>
            

           

            
        </div>
    </header>
    <main class="container mx-auto px-4 py-12">
        {block name="content"}{/block}
    </main>
    <!-- FOOTER -->
    <footer class="bg-white border-t mt-16">
        <div class="container mx-auto px-4 py-6 text-center text-gray-500">
            © 2026 MyBlog. All rights reserved.
        </div>
    </footer>
</body>
</html>