from car import Car

if __name__ == "__main__":
    print("Hola Mundo!")
    car = Car()
    car.license = "AMD123"
    car.driver = "Andres Herrera"
    print(vars(car))

    car2 = Car()
    car2.license = "QWE987"
    car2.driver = "Fulano de Tal"
    print(vars(car2))