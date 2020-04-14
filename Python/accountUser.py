from account import Account

class AccountUser(Account):
    id = int
    document = str
    email = str
    password = str

    def __init__(self, name, document):
        super.__init__(name, document)
