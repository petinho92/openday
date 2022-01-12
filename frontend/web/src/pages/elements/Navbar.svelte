<script>
    import {push} from 'svelte-spa-router';
</script>

<div class="columns">
    <div class="column is-12">
        <div class="card">
            <div class="card-content">
                <nav class="navbar is-transparent has-centered-logo-alt2" role="navigation"
                     aria-label="main navigation">
                    <div class="navbar-brand is-hidden-desktop">
                        <a class="navbar-item" on:click={ () => push("/")}>
                            <img src="/~web/images/mik51_white.png" class="imageee">
                        </a>
                        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                           data-target="navbarBasicExample"
                           onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
                            <span aria-hidden="true" class="nbburger"></span>
                            <span aria-hidden="true" class="nbburger"></span>
                            <span aria-hidden="true" class="nbburger"></span>
                        </a>
                    </div>
                    <div id="navbarBasicExample" class="navbar-menu">

                        <div class="navbar-brand is-hidden-touch imagee">
                            <a class="navbar-item" on:click={ () => push("/")}>
                                <figure><img src="/~web/images/mik51_white.png" class="imageee"></figure>
                            </a>
                            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                               data-target="navbarBasicExample"
                               onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
                                <span aria-hidden="true" class="nbburger"></span>
                                <span aria-hidden="true" class="nbburger"></span>
                                <span aria-hidden="true" class="nbburger"></span>
                            </a>
                        </div>

                        <div class="navbar-start" onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
                            <a class="navbar-item nbi" on:click={() => push('/programs')}>
                                Programok
                            </a>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link nbi">
                                    Regisztráció
                                </a>
                                <div class="navbar-dropdown">
                                    <a class="navbar-item dditem" on:click={ () => push("/student")}>
                                        Diákoknak
                                    </a>
                                    <hr class="navbar-divider">
                                    <a class="navbar-item dditem" on:click={ () => push("/guest")}>
                                        Kísérőknek
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


<style>

    .navbar.has-centered-logo-alt2 .navbar-menu {
        flex-wrap: wrap;
    }

    .navbar.has-centered-logo-alt2 .navbar-start,
    .navbar.has-centered-logo-alt2 .navbar-end {
        flex: 1 1 0;
    }

    .navbar.has-centered-logo-alt2 .navbar-wide.navbar-start {
        flex: 1 1 100%;
        justify-content: center;
    }
    .dditem{
        color: black;
    }
    .card {
        background-color: #1a2b50;
    }

    .navbar {
        background-color: #1a2b50;
    }

    .columns {
        background-color: #1a2b50;
    }

    .card-content {
        color: #F4F3EA;
        text-space: 2px;
        font-weight: bold;
        font-size: 1.25em;
    }

    @media screen and (min-width: 1023px){
        .nbi{
            color: #F4F3EA;
        }

        .nbi:hover{
            color: #9bb0cb;
            transition: color 1s;
        }
    }
    @media screen and (max-width: 768px){
        .nbi{
            color: black;
        }
    }

    .nbburger{
        color: #F4F3EA;
    }

    .imageee{
        height: 80%;
        width: 80%;
    }
    .navbar-menu{
        max-width: 95vw;
    }

    .navbar-menu{
        animation: navAnimOpen .2s ease-in-out;
    }

    @keyframes navAnimOpen {
        0% {display: none;opacity: 0;max-height: 0;}
        1% {display: block;opacity: 0;}
        100% {opacity: 1;max-height: 396px;}
    }
</style>