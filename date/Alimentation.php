<?php

    include_once __DIR__ . "/Product.php";


    class Alimentation extends Product{
        protected $typeOfFood;
        protected $weight;
        protected $isAdult;
        protected $isSterilized;

        function __construct($typeOfFood, $weight, $isAdult, $isSterilized, $name, $brand, $price, $animal)
        {
            parent::__construct($name, $brand, $price, $animal);
            $this->typeOfFood = $typeOfFood; 
            $this->weight = $weight;
            $this->isAdult = $isAdult;
            $this->isSterilized = $isSterilized;
        }
    }
?>