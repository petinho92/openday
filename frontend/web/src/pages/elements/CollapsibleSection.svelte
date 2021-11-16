<script xmlns="http://www.w3.org/1999/html">
    import {Button} from 'svelma';
    export let section;
    export let sectionName;
    let expanded = false
</script>

<div class="collapsible">
    <div class="notification headercolor" aria-expanded={expanded} on:click={() => expanded = !expanded}>
        <span class="is-size-5">{section}</span>: <b>{sectionName}</b><br />
    </div>

    <div class='contents' hidden={!expanded}>
        <slot></slot>
    </div>
</div>

<style>
    .collapsible {
        border-bottom: 1px solid var(--gray-light, #eee);
    }
    h3 {
        margin: 0;
    }
    Button {
        background-color: var(--background, #fff);
        color: var(--gray-darkest, #282828);
        display: flex;
        justify-content: space-between;
        width: 100%;
        border: none;
        margin: 0;
        padding: 1em 0.5em;
    }
    Button[aria-expanded="true"] {
        border-bottom: 1px solid var(--gray-light, #eee);
    }
    Button[aria-expanded="true"] .vert {
        display: none;
    }
    .notification:focus svg{
        outline: 2px solid;
    }
    .notification [aria-expanded="true"] rect {
        fill: currentColor;
    }
    svg {
        height: 0.7em;
        width: 0.7em;
    }
    .contents{
        padding: 18px 18px;
        background-color: hsl(217, 71%, 53%);
    }
    .headercolor{
        background-color: #17619f;
        color: white;
        text-align: left;
    }
</style>