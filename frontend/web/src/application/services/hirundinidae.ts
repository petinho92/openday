import StudentsFormData from "src/application/formData/student.ts";
import handleFetch from "src/application/services/handle-fetch";
import {active} from "src/application/services/stores";
import GuestFormData from "src/application/formData/guest.ts";


export function hirundinidae(input: StudentsFormData){
    fetch('/post/studentPost', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(input)
    }).then(function (response) {
        handleFetch(response);
      //  active = false;
        if(response.ok){
         return active.set(true);
        }
    })
}

export function hirundorustica(input: GuestFormData){
    fetch('/post/guestPost', {
        method: 'POST',
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(input)
    }).then(function (response) {
        handleFetch(response);
        //  active = false;
        if(response.ok){
            return active.set(true);
        }
    })
}
