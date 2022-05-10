<?php

include_once __DIR__ . '/CreditCard.php';

    class User{
        protected $firstName;
        protected $lastName;
        protected $email;
        protected $creditCard;
        protected $isRegistered;
        protected $discount;

        function __construct( $firstName, $lastName, $email, $isRegistered, CreditCard $creditCard, $discount = null)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->isRegistered = $isRegistered;
            $this->creditCard = $creditCard;
            $this->discount = $discount;
        }

        public function setName($firstName, $lastName){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }

        public function getName(){
            return $this->firstName . ' ' . $this->lastName;
        }

        public function setCreditCard( CreditCard $creditCard){
            $this->creditCard = $creditCard;
        }

        public function getCreditCard(){
            return $this->creditCard;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setIsRegistered($isRegistered){
            $this->isRegistered = $isRegistered;
        }

        public function getIsRegistered(){
            return $this->isRegistered;
        }

        public function getDiscount(){
           if($this->isRegistered){
                return $this->discount = 20;
           }return $this->discount = 0;
        }

        public function buyProduct($product){
    
            if ($this->creditCard->getExpirationDate() < date('Y')){

                return 'La tua carta di credito è scaduta';

            } else if ($this->getDiscount() > 0) {

                $price = $product->getPrice() - $product->getPrice() / 100 * $this->getDiscount();

                return "Hai sconto di $this->discount% e hai speso " . round($price, 2) . "€";

            } return "Non hai nessuno sconto e hai speso " . round($product->getPrice(), 2) . "€";
        }

    }

?>