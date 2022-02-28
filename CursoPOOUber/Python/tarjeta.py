from datetime import date
from payment import Payment

class Tarjeta(Payment):
    banco               = str
    fechaVencimiento    = date.today()
    cvv                 = int 

    def __init__(self, id, fechaVencimiento, cvv):
        super().__init__(id)
        self.fechaVencimiento = fechaVencimiento
        self.cvv = cvv
        