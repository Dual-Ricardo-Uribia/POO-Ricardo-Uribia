class Tarjeta extends Payment(){
    constructor(id, banco, fechaVencimiento, cvv){
        super(id)
        this,banco = banco;
        this,fechaVencimiento = fechaVencimiento;
        this.cvv = cvv;
    }
}