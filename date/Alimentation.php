<?php

    include_once __DIR__ . "/Product.php";


    class Alimentation extends Product{
        protected $typeOfFood;
        protected $weight;
        protected $isAdult;
        protected $isSterilized;

        function __construct($typeOfFood, $weight, $isAdult, $isSterilized, $name, $brand, $price, $description)
        {
            parent::__construct($name, $brand, $price, $description);
            $this->typeOfFood = $typeOfFood; 
            $this->weight = $weight;
            $this->isAdult = $isAdult;
            $this->isSterilized = $isSterilized;
        }

        public function setTypeOfFood($typeOfFood){
            $this->typeOfFood = $typeOfFood;
        }

        public function getTypeOfFood(){
            return $this->typeOfFood;
        }

        public function setWeight($weight){
            $this->weight = $weight;
        }

        public function getWeight(){
            return $this->weight;
        }

        public function setIsAdult($isAdult){
            $this->isAdult = $isAdult;
        }

        public function getIsAdult(){
            return $this->isAdult;
        }

        public function setIsSterilized($isSterilized){
            $this->isSterilized = $isSterilized;
        }

        public function getIsSterilized(){
            return $this->isSterilized;
        }

    }
?>