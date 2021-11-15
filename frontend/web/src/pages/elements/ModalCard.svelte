<script>
    import { onDestroy, onMount } from 'svelte'
    import { chooseAnimation, isEscKey } from 'svelma/src/utils'
    import {push} from 'svelte-spa-router';
    import {active} from "src/application/services/stores";
    export let title = "Modal Title"
    export let animation = 'scale'
    export let animProps = { start: 1.2 }
    export let size = ''
    export let showClose = true
    export let onBody = true
    let modal
    $: _animation = chooseAnimation(animation)
    $: {
        if (modal && $active && onBody) {
            document.body.appendChild(modal)
        }
    }
    onMount(() => {})
    function close() {
        $active = false
        push("/")
    }
    function keydown(e) {
        if ($active && isEscKey(e)) {
            push("/")
            close()
        }
    }
</script>

<svelte:window on:keydown={keydown} />

<div class="modal {size}"  class:is-active={$active} bind:this={modal}>
    <div class="modal-background" on:click={close}></div>
    <div class="modal-card" transition:_animation|local={animProps}>
        <header class="modal-card-head">
            <p class="modal-card-title headtitle">{title}</p>
            <button class="delete" aria-label="close" on:click={close} />
        </header>
        <section class="modal-card-body">
            <slot />
        </section>
    </div>
</div>

<style>
    .headtitle{
        color: green;
    }
</style>