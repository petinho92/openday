<script>
    import { createEventDispatcher } from "svelte";
    const dispatch = createEventDispatcher();

    export let selected = [];
    export let items;
    export let label;
    export let require;

</script>

<label class="label has-text-left mt-3">{label}{#if require}<b class="has-text-danger">*</b>{/if}
</label>
{#each items as item}
    <label class="checkbox">
        <input
                type="checkbox"
                bind:group={selected}
                on:change={()=> {dispatch('change', selected)}}
                value={item.name} />
        {item.name}
    </label>
    <br>
{/each}