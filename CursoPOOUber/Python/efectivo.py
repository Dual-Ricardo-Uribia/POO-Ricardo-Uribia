from payment import Payment

class Efectivo(Payment):
    cantidad = int

    def __init__(self, id, cantidad):
        super().__init__(id)
        self.cantidad = cantidad 