import {gimnazium, szakiskola, szakkozepiskola, szakgimnazium, egyetem, foiskola,technikum} from "src/application/statData/schools";

let list = Array();
export default function selectorSchoolType(input: string){
        if (input === "gimnázium") {
            list = gimnazium;
        }
        if (input === "technikum") {
            list = technikum;
        }
        if (input === "szakgimnázium") {
            list = szakgimnazium;
        }
        if (input === "szakközépiskola") {
            list = szakkozepiskola;
        }
        if (input === "szakiskola") {
            list = szakiskola;
        }
        if (input === "főiskola") {
            list = foiskola;
        }
        if (input === "egyetem") {
            list = egyetem;
        }
    return list;
}

