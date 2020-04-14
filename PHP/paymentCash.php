<?php
    class PaymentCash extends Payment{
        public $amount;

        public function __construct($id, $amount){
            parent::__construct($id);
            $this->amount = $amount;
        }

    }
?>