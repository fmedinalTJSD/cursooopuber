from payment import Payment
import datetime

class PaymentCard(Payment):
    id = int
    number = str
    cvv = str
    dateExp = datetime.date

    def __init__(self, id, number, cvv, dateExp):
        super.__init__(id)
        self.number = number
        self.cvv = cvv
        self.dateExp = dateExp