from pyexpat import model
from car import Car

class UberX(Car):
    brand = str
    model = str

    def __init__(self, license, driver, brand, model):
        self.license = license
        self.driver = driver
        self.brand = brand
        self.model = model