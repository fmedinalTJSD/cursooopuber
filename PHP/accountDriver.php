<?php
    require_once("account.php");
    class AccountDriver extends Account{
        public $id;
        public $name;
        public $document;
        public $email;
        public $password;

        public function __construct($name, $document){
            parent::__construct($license, $document);
        }
    }
?>