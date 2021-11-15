<script>
    import {Button} from 'svelma';
    import GuestFormData from "src/application/formData/guest.ts";
    import {active} from "src/application/services/stores.ts";
    import ModalCard from "src/pages/elements/ModalCard.svelte";
    import {hirundorustica} from "src/application/services/hirundinidae";
    let formData = new GuestFormData();

    let privacy;
    let covid;

    function sendData() {
        hirundorustica(formData);
    }
</script>

<div class="container is-max-desktop mt-6 cont">
    <div class="tile is-parent">
        <div class="tile is-child box formcolor">
            <p class="title has-text-centered">Regisztráció</p>

            <div class="is-divider is-info" data-content="Személyes adatok"></div>

            <div class="field">
                <label class="label">Név<b class="has-text-danger">*</b></label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="text" placeholder="Név" bind:value={formData.name} maxlength="30">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                </div>
            </div>

            <div class="field">
                <label class="label">Email<b class="has-text-danger">*</b></label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="email" placeholder="example@example.com" bind:value={formData.email}>
                    <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                     </span>
                </div>
            </div>
            <label class="checkbox has-text-left-mobile">
                <br><input type="checkbox" bind:checked={covid}>
                Nyilatkozom, hogy rendelkezem védettségi igazolvánnyal vagy azzal egyenértékű igazolással.<b
                    class="has-text-danger">*</b>
            </label>
            <label class="checkbox has-text-left-mobile">
                <br><input type="checkbox" bind:checked={privacy}>
                Elfogadom az <a href='/~web/files/privacy_policy_openday.pdf' target='_blank'>adatvédelmi tájákoztatót</a> és hozzájárulok a regisztráció során megadott személyes adataim kezeléséhez.<b class="has-text-danger">*</b>
            </label>
            <div class="field mt-4">
                <Button type="is-info" on:click={sendData} disabled={!privacy | !covid}>Regisztrálok</Button>
            </div>
        </div>


    </div>
</div>

<ModalCard bind:active={$active} title="Sikeres regisztráció">
    <div class="modal-card-body">
        <p></p>
        <p>Sikeresen regisztrált a MIK Nyílt Nap rendezvényre!</p>
        <p></p>
        <p></p>
    </div>
</ModalCard>