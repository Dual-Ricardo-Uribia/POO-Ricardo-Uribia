package Java;

class Main{
    public static void main(String[] args) {
        Car car = new Car("AMQ145", new Account("Andres Herrera", "AND123", "andres.herrera@gmail.com", "12345"));
        car.passegenger = 4;
        car.printDataCar(); 
        
        UberX uberX = new UberX("KN123", new Account("Juan lopez", "KFA150", "juan.lopez@gmail.com", "12345678"), "Toyota", "Carolla");
        uberX.printDataCar();

    }
}