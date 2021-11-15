<script>
    import {programType} from "src/application/statData/GetPrograms.ts";
    import ScannerFormData from "src/application/formData/ScannerFormData.ts";
    import {writable} from "svelte/store"
    let formData = new ScannerFormData();

    let success = writable(true);
    let visible = writable(false);
    let inputQR = "";
    let resQr;
    let resName;
    let responseData;
    let message = writable("");

    function onRegister(event) {
        if (event.key === 'Enter') {
            formData.qrCode = inputQR;
            fetch('/access/processingQRCode', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.statusCode === 422) {
                        console.log("lel");
                        $success = false;
                        $visible = true;
                        $message = data.message;
                    } else if (data.statusCode === 200) {
                        $success = true;
                        $visible = true;
                        resName = data.name;
                        resQr = data.qrcode;
                        responseData = data;
                    }
                })
                .finally(inputQR = "")
        }
    }
</script>

<div class='container'>
    <div class='columns is-mobile is-centered'>
        <div class='column is-7-desktop column is-10-mobile has-background-info-light'>
            <div class="card mb-6">
                <div class="card-content">

                    <p class="title has-text-centered is-size-4-mobile">QR Scanner</p>
                    <p class="subtitle is-5 has-text-left"></p>

                </div>
                <div class="is-divider is-info" data-content="Adatok"></div>
                <div class="content">
                    <div class="field ml-5 mr-5">
                        <label class="label has-text-left">Állomás<b class="has-text-danger"></b></label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select bind:value={formData.programType} >
                                    <option value="0">Kérem válasszon!</option>
                                    {#each programType as type}
                                        <option value={type.id}>{type.name} - {type.time}</option>
                                    {/each}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="field ml-5 mr-5">
                            <label class="label has-text-left">QR kód<b class="has-text-danger">*</b></label>
                            <div class="control">
                                <input class="input" type="text" bind:value={inputQR} placeholder="QR kód"
                                       on:keydown={onRegister}>
                            </div>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class='container'>
    <div class='columns is-mobile is-centered is-bold'>
        <div class='column is-7-desktop column is-10-mobile is-bold' class:is-hidden={!$visible}
             class:has-background-success={$success} class:has-background-danger={!$success}>
            {#if $success}
<!--                <h1 class="has-text-centered has-text-white"><b>Sikeres regisztráció</b><br></h1>-->
                <h1 class="has-text-centered has-text-white">{resName}</h1>
                <p class="has-text-centered has-text-white">{resQr}</p>
                <h1 class="has-text-centered has-text-white"><b>Sikeres regisztráció</b><br></h1>
            {/if}
            {#if !$success}
                <h1 class="has-text-centered has-text-white"><br><b>Hiba!</b><br>{$message}</h1>
            {/if}
        </div>
    </div>
</div>