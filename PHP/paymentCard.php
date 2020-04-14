<?php
    class PaymentCard extends Payment{
        public $number;
        public $cvv;
        public $dateExp;

        public function __construct($id, $number, $cvv, $dateExp){
            parent::__construct($id);
            $this->number = $number;
            $this->cvv = $cvv;
            $this->dateExp = $dateExp;
        }

    }
?>