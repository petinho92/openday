// @ts-ignore
import Snackbar from 'svelma/src/components/Snackbar/index.js';

export default {
    success: (message:string)=>Snackbar.create({message, type:"is-success", position: "is-bottom-right"}),
    white: (message:string)=>Snackbar.create({message, type:"is-white", position: "is-bottom-right"}),
    black: (message:string)=>Snackbar.create({message, type:"is-black", position: "is-bottom-right"}),
    light: (message:string)=>Snackbar.create({message, type:"is-light", position: "is-bottom-right"}),
    primary: (message:string)=>Snackbar.create({message, type:"is-primary", position: "is-bottom-right"}),
    info: (message:string)=>Snackbar.create({message, type:"is-info", position: "is-bottom-right"}),
    warning: (message:string)=>Snackbar.create({message, type:"is-warning", position: "is-top-right", duration: 1000}),
    danger: (message:string)=>Snackbar.create({message, type:"is-danger", actionText:"WARNING", position: "is-top-right", duration: 3000})
}