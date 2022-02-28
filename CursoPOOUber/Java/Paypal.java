package Java;

class Paypal extends Payment{
    String referencia;
    String sucursal;

    public Paypal(Integer id, String referencia, String sucursalString){
        super(id);
        this.referencia = referencia;
        this.sucursal = sucursalString;

        this.printdataPayment();
    }

}
