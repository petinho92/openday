<script>
    import CollapsibleSection from "src/pages/elements/CollapsibleSection.svelte";
</script>

<div class="container is-max-desktop mt-6 cont">
    <div class="tile is-parent">
        <div class="tile is-child box formcolor">
            <p class="title has-text-centered">Programok</p>
            <h4 class="has-text-left has-text-danger is-size-6 mb-6 ml-5 is-size-6-mobile">A programváltozás jogát
                fenntartjuk.</h4>
            <table class="table has-text-left ml-4 is-size-10-mobile">
                <thead>
                <tr class="tableheader">
                    <td>Időpont</td>
                    <td>Program neve</td>
                    <td>Helyszín</td>
                </tr>
                </thead>
                <tr>
                    <td>8:30-9:30</td>
                    <td><b>Regisztráció</b></td>
                    <td>Aula</td>
                </tr>
                <tr>
                    <td>9:30-9:35</td>
                    <td><b>Köszöntő</b></td>
                    <td>A010</td>
                </tr>
                <tr>
                    <td>9:35-9:45</td>
                    <td><b>Tervezd velünk a jövőd! - bemutatkozik a MIK</b></td>
                    <td>A010</td>
                </tr>
                <tr>
                    <td>9.45 - 9.55</td>
                    <td><b>Duális képzés bemutatása</b></td>
                    <td>A010</td>
                </tr>
                <tr>
                    <td>9.55-10.00</td>
                    <td><b>Rövid tájékoztató a programokról</b></td>
                    <td>A010</td>
                </tr>
                <tr>
                    <td>10:00-13:00</td>
                    <td><b>Folyamatos programok</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>12:00-13:00</td>
                    <td><b>Nyitott laborok - melyik látogatható?</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>12:00-12:30</td>
                    <td><b>TechCsajok - Női életpálya a Műszaki Karon</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10:00-12:00</td>
                    <td><b>Szakos tájékoztatók</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10:00-13:00</td>
                    <td><b>Egyéb tájékoztatók</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10:00-13:00</td>
                    <td><b>Bemutatkoznak a Duális Partnereink</b></td>
                    <td>Aula</td>
                </tr>
                <tr>
                    <td>13:00-13:30</td>
                    <td><b>3D Központ látogatás I. turnus</b></td>
                </tr>
                <tr>
                    <td>13:30-14:00</td>
                    <td><b>3D Központ látogatás II. turnus</b></td>
                </tr>
            </table>
            <h3 class="subtitle has-text-left is-size-4 is-size-6-mobile mt-6 ml-5 has-text-danger">
                Felhívjuk szíves figyelmüket, hogy a rendezvény csak védettségi igazolvánnyal vagy azzal egyenértékű igazolással
                látogatható!<br>
            </h3>
            <br>

    <h1 class="has-text-left is-size-3 mb-6 ml-4  is-size-5-mobile">Részletes Programok</h1>
    <CollapsibleSection section="10:00 - 13:00" sectionName="Folyamatos programok">
        <div class="content">
            <table class="table has-text-left is-size-10-mobile">
                <thead class="tableheader">
                <tr>
                    <td>Program neve</td>
                    <td>Helyszín</td>
                    <td>Oktatók/hallgatók</td>
                </tr>
                </thead>
                <tr>
                    <td>Mechanizmusok modelljei, 3D nyomtató</td>
                    <td>Aula</td>
                    <td>Vasvári Gyula Ferenc, Csonka Dávid</td>
                </tr>
                <tr>
                    <td>Építész alkotóhéten készült kompozíciók</td>
                    <td>Aula</td>
                    <td>Dr. Sztranyák Veronika</td>
                </tr>
                <tr>
                    <td>Épületgépészeti tervezés 3D-ben</td>
                    <td>Aula</td>
                    <td>Lenkovics Balázs, Ózdi András</td>
                </tr>
                <tr>
                    <td>Go-kart szimulátor - GO BOSCH versenyen szereplő autóban</td>
                    <td>Aula</td>
                    <td>Malkó Tibor</td>
                </tr>
                <tr>
                    <td>Automatikai játék</td>
                    <td>villamos folyosó</td>
                    <td>Elter Patrik</td>
                </tr>
                <tr>
                    <td>Egy szusszal a helyére - Pneumatikus játék</td>
                    <td>Aula</td>
                    <td>Malkó Tibor</td>
                </tr>
                <tr>
                    <td>Ember-gép kapcsolati interfészen alapuló játékok, alkalmazások</td>
                    <td></td>
                    <td>Dr. Sári Zoltán, Müller Péter</td>
                </tr>
                <tr>
                    <td>3D nyomtatás, hallgatók által fejlesztett játék VR-ban</td>
                    <td></td>
                    <td>Péntek Attila</td>
                </tr>
                <tr>
                    <td>Formatervezett bútorok kiállítása</td>
                    <td>Aula</td>
                    <td>Dr. Vasváry-Nádor Norbert + hallgatók</td>
                </tr>
                <tr>
                    <td>Bemutató formatervező hallgatók munkáiból, MiMIKe síkból térbe való megformálása</td>
                    <td>Aula</td>
                    <td>Dr. Vasváry-Nádor Norbert + hallgatók</td>
                </tr>
                <tr>
                    <td>Megújuló energiák mindennapi használatban</td>
                    <td>Aula</td>
                    <td>Pataki Tamás, Dr. Pécz Tibor</td>
                </tr>
                <tr>
                    <td>A televíziós műsorkészítő hallgatók forgatócsoportjai forgatnak</td>
                    <td>Aula</td>
                    <td>Hauer János</td>
                </tr>
                <tr>
                    <td>Válogatás az I. évfolyamos építész hallgatók rajzi munkáiból</td>
                    <td>Aula</td>
                    <td>Dr. Németh Pál, Dr. Krámli Márta</td>
                </tr>
                <tr>
                    <td>Pneumobil</td>
                    <td>Aula</td>
                    <td>Malkó Tibor</td>
                </tr>
            </table>
        </div>
    </CollapsibleSection>

    <CollapsibleSection section="12:00 - 13:00" sectionName="Nyitott laborok - melyik látogatható?">
        <div class="content">
            <table class="table has-text-left is-size-10-mobile">
                <thead class="tableheader">
                <tr>
                    <td>Terem</td>
                    <td>Helyszín</td>
                    <td>Oktató</td>
                </tr>
                </thead>
                <tr>
                    <td>Geodézia- és Közmű labor</td>
                    <td>C0023</td>
                    <td>Aradi László, Bonnyai Zsolt</td>
                </tr>
                <tr>
                    <td>Tartószerkezet labor</td>
                    <td>C0040</td>
                    <td>Dr. Fülöp Attila</td>
                </tr>
                <tr>
                    <td>Zöld tető</td>
                    <td>C0035</td>
                    <td>Somfai Dávid</td>
                </tr>
                <tr>
                    <td>ITF Stúdio</td>
                    <td>C0027</td>
                    <td>Dr. Vasváry-Nádor Norbert</td>
                </tr>
                <tr>
                    <td>Forgácsoló üzem megtekintése, fogaskerék fogazás bemutatása</td>
                    <td>G56</td>
                    <td>Gradwohl János, Meiszterics Zoltán</td>
                </tr>
                <tr>
                    <td>Termikus mérőbábu, hőkamera, mérőkabin</td>
                    <td>C032</td>
                    <td>Loch Gábor, Budulski László, Reisz Viktor</td>
                </tr>
                <tr>
                    <td>Plüssállatka szakító vizsgálatok</td>
                    <td>C0047</td>
                    <td>Told Roland, Zsebe Tamás</td>
                </tr>
                <tr>
                    <td>Környezetvédelmi méréstechnikai laborok, gyökérzónás szennyvíztisztító kutatótelep bemutatása
                    </td>
                    <td>C003-C006</td>
                    <td>Pataki Tamás, Varga Zsolt, Somfai Dávid, Dolgosné dr. Kovács Anita</td>
                </tr>
                <tr>
                    <td>CISCO, EIB labor</td>
                    <td>B225-B226</td>
                    <td>Elter Patrik</td>
                </tr>
                <tr>
                    <td>FESTO labor</td>
                    <td>B0022</td>
                    <td>Elter Patrik</td>
                </tr>
                <tr>
                    <td>Villamos gépek labor</td>
                    <td>B0024</td>
                    <td>Elter Patrik</td>
                </tr>
                <tr>
                    <td>Méréstechnika</td>
                    <td>B0028</td>
                    <td>Elter Patrik</td>
                </tr>
                <tr>
                    <td>Elektronika labor</td>
                    <td>B0027</td>
                    <td>Elter Patrik</td>
                </tr>
                <tr>
                    <td>PLC labor</td>
                    <td>B0029</td>
                    <td>Elter Patrik</td>
                </tr>
            </table>
        </div>
    </CollapsibleSection>
    <CollapsibleSection section="10:00 - 12:30" sectionName="Szakok tájékoztatói">
        <div class="content">
            <table class="table has-text-left is-size-10-mobile">
                <thead class="tableheader">
                <tr>
                    <td>Időpont</td>
                    <td>Szak</td>
                    <td>Helyszín</td>
                    <td>Előadó(k)</td>
                </tr>
                </thead>
                <tr><td>11:00 - 12:00</td><td>Építőművész / Építészmérnök / Építész / Településmérnök</td><td></td><td>Dr. Rétfalvi Donát, dr. Halada Miklós, dr. Németh Pál</td></tr>
                <tr><td>11:30 - 12:30</td><td>Ipari termék- és formatervező</td><td></td><td>Dr. Vasváry-Nádor Norbert</td></tr>
                <tr><td>10:00 - 11:00</td><td>Villamosmérnök</td><td></td><td>Dr. Kvasznicza Zoltán</td></tr>
                <tr><td>11:00 - 12:00</td><td>Gépészmérnök</td><td>A217</td><td>Eördöghné Dr. Miklós Mária, Baumann Mihály, Vasvári Gyula Ferenc</td></tr>
                <tr><td>10:30 - 11:30</td><td>Mérnökinformatikus</td><td></td><td>Dr. Iványi Péter</td></tr>
                <tr><td>11:00 - 12:00</td><td>Környezetmérnök</td><td></td><td>Dolgosné dr. Kovács Anita</td></tr>
                <tr><td>10:00 - 11:00</td><td>Műszaki FOKSZ</td><td>A217</td><td>Eördöghné Dr. Miklós Mária</td></tr>
                <tr><td>10:30 - 11:30</td><td>Televíziós műsorkészítő</td><td></td><td>Hauer János</td></tr>
            </table>
        </div>
    </CollapsibleSection>

    <CollapsibleSection section="10:00 - 13:00" sectionName="Egyéb tájékooztatók">
        <div class="content">
            <table class="table has-text-left is-size-10-mobile">
                <thead class="tableheader">
                <tr>
                    <td>Név</td>
                    <td>Helyszín</td>
                    <td>Előadó</td>
                </tr>
                </thead>
                <tr><td>Tanulmányi csoport</td><td>infopult</td><td>Kukai Annamária</td></tr>
                <tr><td>Műszaki szaknyelvi központ</td><td>Aula</td><td>Poór Kinga</td></tr>
                <tr><td>HÖK</td><td>infopult</td><td>Kovács Norbert</td></tr>
                <tr><td>Breuer Marcell Doktori Iskola, Mentor Klubot működtető oktatók és hallgatók előadása</td><td>Aula</td><td>Martonné Gyurász Zsuzsanna</td></tr>
                <tr><td>b2 Szakkollégium</td><td>Aula</td><td>Marosi Henrietta</td></tr>
                <tr><td>Juhász Jenő Szakkollégium</td><td>A008</td><td>Péntek Attila</td></tr>
                <tr><td>Duális képzés</td><td>Aula</td><td>Ackerl Adrienn</td></tr>
                <tr><td>Erasmus</td><td>Aula</td><td>Somfai Réka</td></tr>
            </table>
        </div>
    </CollapsibleSection>
        </div>
    </div>
</div>

<style>
    .tableheader{
        background-color: hsl(217, 71%, 45%);
    }
    .tableheader td{
        color: white;
        font-weight: bold;
    }

    @media screen and (max-width: 767px) {
       .is-size-10-mobile{
           font-size: 0.5rem;
       }
    }

</style>