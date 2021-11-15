<script lang="ts">
    import StudentForm from "src/pages/form/StudentForm.svelte";
    import GuestForm from "src/pages/form/GuestForm.svelte";
    import {location} from "svelte-spa-router";
</script>

{#if $location === '/student'}
    <StudentForm />
{/if}
{#if $location === '/guest'}
    <GuestForm />
{/if}
