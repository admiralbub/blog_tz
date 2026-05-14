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