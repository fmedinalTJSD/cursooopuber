<?php
    require_once('car.php');
    class UberBlack extends Car{
        $typeCarAccepted = array();
        $seatsMaterial = array();

        public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial){
            parent::__construct($license, $driver)
            $this->typeCarAccepted = $typeCarAccepted;
            $this->seatsMaterial = $seatsMaterial;
        }
    }


    /*$fruits = array (
        "fruits"  => array("a" => "Orange", "b" => "Banana", "c" => "Apple"),
        "numbers" => array(1, 2, 3, 4, 5, 6),
        "holes"   => array("first", 5 => "second", "third")
    ); */


?>