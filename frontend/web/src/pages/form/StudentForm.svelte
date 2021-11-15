<script>
    import {Button} from 'svelma';
    import StudentsFormData from "src/application/formData/student.ts";
    import {schooltypes} from "src/application/statData/schools.ts";
    import {majors} from "src/application/statData/majors.ts";
    import {wherehear, whohelpyou} from "src/application/statData/stats.ts";
    import selectorSchoolType from "src/application/services/schoolTypeSelector.ts";
    import {hirundinidae} from "src/application/services/hirundinidae.ts";
    import ModalCard from "src/pages/elements/ModalCard.svelte";
    import InputField from "src/pages/elements/InputField.svelte";
    import ComboBox from "src/pages/elements/ComboBox.svelte";
    import CheckboxField from "src/pages/elements/CheckboxField.svelte";
    import {active} from "src/application/services/stores.ts";
    let formData = new StudentsFormData();
    let list = [];
    let schoolss = [];
    let privacy;
    let covid;
    // let active = false;


    function sendData() {
        hirundinidae(formData);
    }

    function updateBoxes(){
        formData.city = "";
        formData.school = "";
        list.pop();
        schoolss.pop();

    }

    function handleSelectSchoolType(event){

        formData.schooltype = event.detail.selected.name;
        list = selectorSchoolType(formData.schooltype);
    }

    function handleSelectCity(event){
        formData.city = event.detail.selected.city;
        schoolss = event.detail.selected.schools;
    }

    function handleSelectSchool(event){
        formData.school = event.detail.selected.value;
    }

    function handleCheckboxMajor(event){}
    function handleWhereHear(event){}
    function handleWhoHelp(event){}

</script>

<div class="container is-max-desktop mt-6 cont">
    <div class="tile is-parent">
        <div class="tile is-child box formcolor">
            <p class="title has-text-centered">Regisztráció</p>

            <div class="is-divider is-info" data-content="Személyes adatok"></div>

            <InputField placeholder="Név" label="Név" needIcon={true} require={true} bind:value={formData.name} iconTag="fas fa-user"/>
            <InputField placeholder="example@example.com" label="Email" require={true} needIcon={true} iconTag="fas fa-envelope" bind:value={formData.email}/>
            <ComboBox label="Intézmény típusa" require={true} collection={schooltypes} optionIdentifier="name" labelIdentifier="name" on:message={handleSelectSchoolType}/>
            <ComboBox label="Város" require={true} labelIdentifier="city" optionIdentifier="city" collection={list} on:message={handleSelectCity} />
            <ComboBox require={true} optionIdentifier="value" labelIdentifier="value" label="Intézmény" collection={schoolss} on:message={handleSelectSchool}/>
            <CheckboxField on:change={handleCheckboxMajor} bind:selected={formData.major} items={majors} label="Mely képzésein érdekelnek?" require={true}/>
            <CheckboxField on:change={handleWhereHear} bind:selected={formData.wherehear} items={wherehear} label="Hol szereztél tudomást a nyílt napról?" require={true}/>
            <CheckboxField on:change={handleWhoHelp} bind:selected={formData.whohelps} items={whohelpyou} label="Ki segít a felvételi döntésedben?" require={true} />

            <br>
            <label class="checkbox has-text-left-mobile">
                <br><input type="checkbox" bind:checked={covid}>
                Nyilatkozom, hogy rendelkezem védettségi igazolvánnyal vagy azzal egyenértékű igazolással.<b
                    class="has-text-danger">*</b>
            </label>
            <label class="checkbox has-text-left-mobile">
                <br><input type="checkbox" bind:checked={privacy}>
                Elfogadom az <a href='/~web/files/privacy_policy.pdf' target='_blank'>adatvédelmi
                tájákoztatót</a> és hozzájárulok a regisztráció során megadott személyes adataim kezeléséhez.<b
                    class="has-text-danger">*</b>
            </label>
            <div class="field mt-4">
                <Button type="is-info" on:click={sendData} disabled={!privacy | !covid}>Regisztrálok</Button>
            </div>
        </div>


    </div>


</div>

<style lang="css">
    /*.cont {*/
    /*    background-color: #dce2ee;*/
    /*}*/

    /*.formcolor {*/
    /*    background-color: rgba(179, 192, 250, 0.68);*/
    /*}*/
</style>


<ModalCard bind:active={$active} title="Sikeres regisztráció">
    <div class="modal-card-body">
        <p></p>
        <p>Sikeresen regisztráltál a MIK Nyílt Nap rendezvényre!</p>
        <p>Hamarosan emailben értesítünk a részletekkel kapcsolatban!</p>
        <p></p>
    </div>
</ModalCard>