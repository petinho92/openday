class StudentsFormData {
    private _name : String = "";
    private _email : String = "";
    private _schooltype : String = "";
    private _city : String = "";
    private _school : String = "";
    private _major : Array<String> = [];
    private _wherehear : Array<String> = [];
    private _whohelps : Array<String> = [];


    get major(): Array<String> {
        return this._major;
    }

    set major(value: Array<String>) {
        this._major = value;
    }

    get name(): String {
        return this._name;
    }

    set name(value: String) {
        this._name = value;
    }

    get email(): String {
        return this._email;
    }

    set email(value: String) {
        this._email = value;
    }

    get schooltype(): String {
        return this._schooltype;
    }

    set schooltype(value: String) {
        this._schooltype = value;
    }

    get city(): String {
        return this._city;
    }

    set city(value: String) {
        this._city = value;
    }

    get school(): String {
        return this._school;
    }

    set school(value: String) {
        this._school = value;
    }

    get wherehear(): Array<String> {
        return this._wherehear;
    }

    set wherehear(value: Array<String>) {
        this._wherehear = value;
    }

    get whohelps(): Array<String> {
        return this._whohelps;
    }

    set whohelps(value: Array<String>) {
        this._whohelps = value;
    }
}export  default StudentsFormData;
