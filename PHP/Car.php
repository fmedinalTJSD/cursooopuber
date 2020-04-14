<?php
    require_once('account.php');
    class Car{
        public $id;
        public $license;
        public $driver;
        public $passenger;

        public function __contruct($license, $driver){
            $this->license = $licencia;
            $this->driver = $driver;
        }

        public function printDataCar(){
            echo "License:   $this->license Driver: ".$this->driver->name;
        }
    }
?>