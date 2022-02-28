package Java;

class Efectivo extends Payment{
    Integer cantidad;

    public Efectivo(Integer id, Integer cantidad){
        super(id);
        this.cantidad = cantidad;

        printdataPayment();
    }
    
}
