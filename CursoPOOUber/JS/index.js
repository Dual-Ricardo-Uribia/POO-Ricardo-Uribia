var car = new Car("AW456", new Account("Andres Herrera", "QWE234", "andres.herrera@gmail.com", "MXM234"))
car.pasajeros = 4;
car.printDataCar();

console.log("UberX")
var uberX = new UberX("MXM345", new Account("Adrea Ferran", "ANDA123", "adrea.ferran@gmail.com", "123456"), "Chevrolet", "Spark")
uberX.pasajeros = 4;
uberX.printDataUberX();

console.log("User")
var user = new User("Damian Santos", new Account( "KLT1235", "damian.santos@gmail.com", "12454322"))
user.printDataUser();