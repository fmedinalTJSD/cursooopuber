<?php
    require_once('car.php');
    class UberVan extends Car{
        $typeCarAccepted = array();
        $seatsMaterial = array();

        public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial){
            parent::__construct($license, $driver)
            $this->typeCarAccepted = $typeCarAccepted;
            $this->seatsMaterial = $seatsMaterial;
        }
    }
?>