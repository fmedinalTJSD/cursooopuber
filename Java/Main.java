class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo!");
        Car car = new Car("AMQ123", new Account("Andres Herrera", "AMD123"));
        //Car car = new Car();
        //car.license = "AMQ123";
        //car.driver = "Andres Herrera";
        car.passenger = 4;
        car.printDataCar();

        Car car2 = new Car("QWE987", new Account("Fulanito de Tal", "QWE987"));
        //Car car2 = new Car();
        //car2.license = "QWE987";
        //car2.driver = "Fulanito de Tal";
        car2.passenger = 5;
        car2.printDataCar();
        
    }
}