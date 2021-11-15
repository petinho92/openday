export default class ScannerFormData {
    private _programType: Number = 0;
    private _qrCode: String = "";


    get programType(): Number {
        return this._programType;
    }

    set programType(value: Number) {
        this._programType = value;
    }

    get qrCode(): String {
        return this._qrCode;
    }

    set qrCode(value: String) {
        this._qrCode = value;
    }
}