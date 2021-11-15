import "./options";
import App from "gold-admin/app.svelte";
import ListManager from "gold-admin/app/list-manager";
import MenuItem from "gold-admin/app/menu-item";
import PageManager from "gold-admin/app/page-manager";
import AuthApi from "gold-admin/auth/auth-api";
import FaIcon from "gold-admin/fa-icon";
import FormPage from "gold-admin/form/form-page";
import UserForm from "src/pages/user-form";
import DashboardPage from "src/pages/dashboard-page";
import ScannerPage from "src/pages/scanner-page"
import UserList from "src/pages/user-list";
import type I_User from "gold-admin/auth/user.interface";

let pageManager = new PageManager();
let listManager = new ListManager();
let authApi = new AuthApi("/gold/auth", () => {
	pageManager.add(new DashboardPage());
	pageManager.add(new ScannerPage());
	listManager.add(new UserList());
});

let menu = [
	new MenuItem("Search", FaIcon.s("search"), () => {pageManager.add(new DashboardPage())}),
	new MenuItem('Scanner', FaIcon.s("dice-d6"), () => {pageManager.add(new ScannerPage())}),
	new MenuItem("Users", FaIcon.s("users"), () => {listManager.add(new UserList())}, 'administrator'),
]

function userMenu(user: I_User | null) {
	return [new MenuItem("Me", FaIcon.s("user"), () => {pageManager.add(new FormPage(new UserForm(user!.id)))})]
}

window.addEventListener('load', () => new App({target: document.body, props: {pageManager, listManager, menu, userMenu, authApi}}));