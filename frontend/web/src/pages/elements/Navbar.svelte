<script lang="ts">
    import {push} from 'svelte-spa-router';
</script>

<nav class="navbar is-fixed-top color" role="navigation" aria-label="main navigation" id="navbar">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item"
               on:click={ () => push("/")}>
                <img src="/~web/images/mik51_white.png" alt="home" width="90" height="40">
            </a>
            <div class="navbar-burger burgercolor" data-target="navbar-menu"
                 onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="navbar-menu backcolor" id="navbar-menu">
            <a class="navbar-item linkcolor"
               on:click={ () => push("/programs")}>
                Programok
            </a>
            <a class="navbar-item linkcolor"
               on:click={ () => push("/student")}>
                Hallgatóknak
            </a>
            <a class="navbar-item linkcolor"
               on:click={ () => push("/guest")}>
                Kísérőknek
            </a>
        </div>
    </div>
</nav>

<style>
    @media only screen and (min-width: 601px) {
        .backcolor {
            color: black;
        }

        .linkcolor {
            color: white;
        }
    }

    @media only screen and (max-width: 1023px) {
        .linkcolor {
            color: black;
        }
    }
    @media only screen and (max-width: 600px) {
        .backcolor {
            color: #eeeeee;
        }
    }

    .color {
        background-color: #101b33;
    }

    .burgercolor {
        color: white;
    }
</style>