<script>
    import Select from 'svelte-select';
    import {createEventDispatcher} from 'svelte';

    export let collection = [];
    export let optionIdentifier;
    export let labelIdentifier;
    export let label;
    export let require;

    const dispatch = new createEventDispatcher();

    function dispatchSelect(event){
        dispatch('message',{
           selected: event.detail
        });
    }
</script>
<!--<div class="field">-->
    <label class="label mt-3">{label}{#if require}<b class="has-text-danger">*</b>{/if}</label>
<!--    <div class="control has-icons-left has-icons-right">-->
<!--        <div class="select is-fullwidth">-->
            <Select items={collection} {optionIdentifier} {labelIdentifier} on:select={dispatchSelect} placeholder="Kérem válasszon!"/>
<!--            <span class="icon is-small is-left">-->
<!--                        <i class="fas fa-university"></i>-->
<!--                     </span>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->