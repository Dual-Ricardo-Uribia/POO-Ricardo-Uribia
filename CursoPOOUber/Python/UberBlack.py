from typing_extensions import Self
from car import Car

class UberBlack(Car):
    typeCarAceepted = []
    seatsMaterial   = []

    def __init__(self, license, driver, typeCarAceepted, seatsMaterial):
        super().__init__(license, driver)
    Self.typeCarAceepted = typeCarAceepted
    Self.seatsMaterial = seatsMaterial
