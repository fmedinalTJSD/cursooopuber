from payment import Payment

class PaymentCash(Payment):
    id = int
    amount = float

    def __init__(self, id, amount):
        super.__init__(id)
        self.amount = amount