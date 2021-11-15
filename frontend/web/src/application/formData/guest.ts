class GuestFormData {
    private _name : String = "";
    private _email : String = "";


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
}export default GuestFormData;