<?php

    class CreditCard{
        protected $cardNumber;
        protected $expirationDate;

        function __construct($cardNumber, $expirationDate)
        {
            $this->cardNumber = $cardNumber;
            $this->expirationDate = $expirationDate;
        }

        public function setCardNumber($cardNumber){
            $this->cardNumber = $cardNumber;
        }

        public function getCardNumber(){
            return $this->cardNumber;
        }

        public function setExpirationDate($expirationDate){
            $this->expirationDate = $expirationDate;
        }

        public function getExpirationDate(){
            return $this->expirationDate;
        }
    }

?>