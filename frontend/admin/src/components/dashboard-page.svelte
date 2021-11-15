<script lang="ts">
    import AbstractPage from "gold-admin/app/abstract-page";
    import Stat from "src/components/Stat.svelte";
    export let page:AbstractPage;
    let title = page.$title;

    let data = [];
    fetch('/stat/getCount')
        .then(res => res.json())
        .then(result => {
            if (result !== false && result !== null) {
                data = result;
            }
        })
</script>

<Stat />