<script>
    import Router from "svelte-spa-router";
    import routes from "src/application/router/routes.ts";
    import 'bulma/css/bulma.css';
    import '@fortawesome/fontawesome-free/js/fontawesome.js'
    import '@fortawesome/fontawesome-free/js/solid.js'
    import Navbar from "src/pages/elements/Navbar.svelte";

</script>

<Navbar />

<Router {routes}/>

<style lang="css" global>
    html{
        height: 100%;
        background-color: #f3f2f2;
    }
    body{
        min-height: 100%;
        background-color: #f3f2f2;


    }
    @media only screen and (min-width: 768px) {
        body {
            background-image: url("/~web/images/bg1.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    }
    @media only screen and (max-width: 767px) {
        body {
            background-color: #242424;
        }
    }
    /*#242424*/
</style>