package Java;

import java.sql.Date;

class Tarjeta extends Payment{
    String banco;
    Date fechaVencimiento;
    Integer cvv;

    public Tarjeta(Integer id, String banco, Date fechaVencimiento, Integer cvv){
        super(id);
        this.banco = banco;
        this.fechaVencimiento = fechaVencimiento;
        this.cvv = cvv;

        printdataPayment();
    }
    
}
