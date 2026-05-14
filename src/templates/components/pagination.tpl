<!-- PAGINATION -->
<div class="flex gap-2 mt-10">

    {* Назад *}
    {if $page > 1}

        <a
            href="?page={$page-1}&sort={$sort}"
            class="px-4 py-2 border rounded-xl"
        >
            Prev
        </a>

    {/if}

    {* Номера страниц *}
    {for $i=1 to $totalPages}

        <a
            href="?page={$i}&sort={$sort}"
            class="px-4 py-2 border rounded-xl
            {if $i == $page} bg-blue-600 text-white {/if}"
        >
            {$i}
        </a>

    {/for}

    {* Вперед *}
    {if $page < $totalPages}

        <a
            href="?page={$page+1}&sort={$sort}"
            class="px-4 py-2 border rounded-xl"
        >
            Next
        </a>

    {/if}

</div>