from car import Car
from account import Account
from UberX import UberX

if __name__ == "__main__":
    print("Hola Mundo")

    car = Car("AMS234", Account("Andres Herrera", "MXM345", "andres.herrera@gmail.com", "23456"))
    print(vars(car))
    print(vars(car.driver))

    print("UbexX")
    uberX = UberX("KLO234", Account("Marco Solis", "SHTG123", "marco.solis@gmail.com", "7898"), "Toyota", "Carolla")
    print(vars(uberX))
    print(vars(uberX.driver))

   