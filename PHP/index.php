<?
    require_once("car.php");
    require_once("uberX.php");
    require_once("account.php");

    $uberX = new uberX("QWE123", new Account("Fulano de Tal", "QWE123"), "Chevrolet", "Cruze");
    $uberX->printDataCar();
?>