<script>
    import Select from 'svelte-select';
    import {createEventDispatcher} from 'svelte';

    const dispatch = new createEventDispatcher();
    export let collection = [];
    export let optionIdentifier;
    export let labelIdentifier;
    export let label;
    export let require;
    export let value;

    function dispatchSelect(event) {
        dispatch('message', {
            selected: event.detail
        });
    }

</script>
<label class="label mt-3">{label}
    {#if require}<b class="has-text-danger">*</b>{/if}
</label>
<Select items={collection} {optionIdentifier} {labelIdentifier} bind:value={value} on:select={dispatchSelect}
        placeholder="Kérem válasszon!"/>
