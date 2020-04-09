from car import Car
from account import Account

if __name__ == "__main__":
    print("Hola Mundo!")

    car = Car("AMD123", Account("Andres Herrera","AMD123"))
    print(vars(car))
    print(vars(car.driver))
    # car = Car()
    # car.license = "AMD123"
    # car.driver = "Andres Herrera"
    # print(vars(car))

    # car2 = Car()
    # car2.license = "QWE987"
    # car2.driver = "Fulano de Tal"
    # print(vars(car2))