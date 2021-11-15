<script>
    import Table from "./elements/Table.svelte";
    import {writable} from "svelte/store";
    import {createEventDispatcher} from "svelte";
    const dispatch = createEventDispatcher();
    let resdata = writable([]);
    let data = [];
    fetch('/stat/getList')
        .then(res => res.json())
        .then(result => {
            if (result !== false && result !== null) {
                data = result;
            }
        })


    let search = "";
    // const columns = ["ID", "Name", "Email", "FoodTicket", "QR Code", "Organisation"];
    const columns = ["Name", "Email", "QR Code"];

    function searchFor(search) {
        return data.filter(item => {
            return Object.values(item).some(value => {
                if (typeof value === "number") {
                    value = String(value);
                }
                if (typeof value === "object") {
                    value = String(value);
                }

                return value.toLowerCase().includes(search.toLowerCase());
            });
        });
    }

    $: filtered = search ? searchFor(search) : data;
</script>

<style>
    :global(body) {
        margin: 0;
        color: #4e4e52;
        background-color: #f3f4fb;
        font-family: sans-serif;
        line-height: 1.4;
        box-sizing: border-box;
    }

    :global(*) {
        box-sizing: border-box;
    }

    main {
        padding: 2rem;
        margin: 0 auto;
        max-width: 1240px;
    }

    header {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 0.75rem;
    }

    h1 {
        font-size: 1.75rem;
        margin: 0 1rem 0 0;
        display: flex;
        align-items: center;
    }

    svg {
        width: 2rem;
        height: 2rem;
        margin: -0.25rem 0.5rem 0 0.25rem;
        background-color: #6d28b3;
        border-radius: 50%;
        padding: 0.25rem;
    }

    .count {
        width: 1.5rem;
        height: 1.5rem;
        padding: 0.25rem;
        font-size: 0.75rem;
        text-align: center;
        background-color: #1a1ad3;
        color: white;
        margin-left: 0.5rem;
        border-radius: 50%;
    }

    input {
        font-size: inherit;
        padding: 0.5rem 1rem 0.5rem 2rem;
        width: 15.75rem;
        border: none;
        background-size: 1.25rem;
        background-repeat: no-repeat;
        background-position: left 0.5rem center;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='48' height='48' viewBox='0 0 24 24' fill='none' stroke='%234f4f4f' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round' %3e%3ccircle cx='11' cy='11' r='8'%3e%3c/circle%3e%3cline x1='21' y1='21' x2='16.65' y2='16.65'%3e%3c/line%3e%3c/svg%3e");
        border-radius: 5rem;
        transition: all 0.25s ease;
    }

    input:focus {
        box-shadow: 0 0.1rem 0.2rem rgba(0, 0, 0, 0.05);
    }
</style>

<main class="container is-small">
    <header>
        <h1>
            Regisztráltak<span class="count">{filtered.length}</span>
        </h1>
        <input type="text" bind:value={search}/>
    </header>
    <div class="container">
        <Table {columns} data={filtered}/>
    </div>
</main>