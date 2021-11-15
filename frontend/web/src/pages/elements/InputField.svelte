<script lang="ts">
    import {writable} from "svelte/store";
    export let label;
    export let require;
    export let placeholder;
    export let needIcon;
    export let iconTag;
    export let value;
</script>

<div class="field">
    <label class="label has-text-left">{label}{#if require}<b class="has-text-danger">*</b>{/if}
    </label>
    <div class="control has-icons-left">
        <input type="text" class="input" placeholder={placeholder} bind:value={value}>
        {#if needIcon}
        <span class="icon is-small is-left">
            <i class={iconTag}></i>
        </span>
        {/if}
    </div>
</div>