import MainPage from "src/pages/MainPage.svelte";
import Registration from "src/pages/Registration.svelte";
import GetQRCode from "src/pages/GetQRCode.svelte";
import Programs from "src/pages/Programs.svelte";

const routes = {
    '/' : MainPage,
    '/student': Registration,
    '/guest': Registration,
    '/programs' : Programs,
    // '/programs' : MainPage,
    '/qr/:code' : GetQRCode
}
export default routes;