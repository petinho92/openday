<script>

    import {push} from "svelte-spa-router";
</script>

<section class="hero is-fullheight">
    <div class="container pt-6">
        <div class="columns pt-6 colbg is-desktop mt-6">
            <div class="column is-two-fifths is-vcentered">
                <h1 class="title ml-6">Nyílt Nap a PTE MIK-en!</h1>
                <p class="text has-text-centered has-text-justified ml-6 mr-6"> A Nyílt Napok állandó részét képezik a képzésekkel, felvételi eljárással, pontszámítással
                    kapcsolatos tájékoztatók, valamint számos kutató laborba engedünk betekintést.<br><br>
                    <b>2022.02.01-én</b> 8:30-tól az Aulában veszi kezdetét a regisztráció, mely után folyamatos
                    programokkal várunk minden kedves látogatót.</p>
            </div>
            <div class="column">
                <img src="https://mik.pte.hu/images/news_gallery/5/3/6/3/20191206-nyiltnap-072-191210155625.jpg"
                     alt="kep">
            </div>
        </div>
    </div>
</section>

<style>
    .herobg{
        background-color: #494848;
    }
    .colbg{
        background-color: #dcd9d9;
        border-radius: 10px;
    }
</style>
<!--<section class="hero is-white is-fullheight bgcolor">-->
<!--    <div class="hero-body">-->
<!--        <div class="container">-->
<!--            <div class="columns  is-vcentered">-->
<!--                <div data-aos="fade-left" class="column-->
<!--          is-10-mobile is-offset-1-mobile-->
<!--          is-10-tablet is-offset-1-tablet-->
<!--          is-4-desktop is-offset-1-desktop-->
<!--          is-4-widescreen is-offset-1-widescreen-->
<!--          is-4-fullhd is-offset-1-fullhd">-->
<!--                    <figure class="image is-circle">-->
<!--                        <img src="https://mik.pte.hu/images/news_gallery/5/3/6/3/20191206-nyiltnap-072-191210155625.jpg"-->
<!--                             alt="kep">-->
<!--                    </figure>-->
<!--                </div>-->
<!--                <div data-aos="fade-down" class="column-->
<!--          is-10-mobile is-offset-1-mobile-->
<!--          is-10-tablet is-offset-1-tablet-->
<!--          is-5-desktop is-offset-1-desktop-->
<!--          is-5-widescreen is-offset-1-widescreen-->
<!--          is-5-fullhd is-offset-1-fullhd">-->
<!--                    &lt;!&ndash;                    <Typewriter cascade>&ndash;&gt;-->
<!--                    <h1 class="titled title is-1 mb-6">-->
<!--                        Nyílt Nap a PTE MIK-en!-->
<!--                    </h1>-->
<!--                    &lt;!&ndash;                    </Typewriter>&ndash;&gt;-->
<!--                    <h2 class="subtitled subtitle">-->
<!--                        A Nyílt Napok állandó részét képezik a képzésekkel, felvételi eljárással, pontszámítással-->
<!--                        kapcsolatos tájékoztatók, valamint számos kutató laborba engedünk betekintést.<br><br>-->
<!--                        <b>2022.01.28-án</b> 8:30-tól az Aulában veszi kezdetét a regisztráció, mely után folyamatos-->
<!--                        programokkal várunk minden kedves látogatót.-->
<!--                    </h2>-->
<!--                    <div>-->
<!--                        <a class="button is-info"-->
<!--                           on:click={ () => push("/programs")}>Programok</a><br class="is-hidden-desktop mt-5">-->
<!--                        <a class="button is-info"-->
<!--                           on:click={ () => push("/student")}>Regisztráció diákoknak</a><br class="is-hidden-desktop mt-5">-->
<!--                        <a class="button is-info"-->
<!--                           on:click={ () => push("/guest")}>Regisztráció kísérőknek</a><br class="is-hidden-desktop mt-5">-->
<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->