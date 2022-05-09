<?php

    include_once __DIR__ . "/Alimentation.php";


    class VeterinaryDiet extends Alimentation{
        protected $ill;

        function __construct($ill,$typeOfFood, $weight, $isAdult, $isSterilized, $name, $brand, $price, $description, $animal)
        {
            parent::__construct($name, $brand, $price, $description, $animal, $typeOfFood, $weight, $isAdult, $isSterilized);
            $this->ill = $ill;
        }

        public function setIll($ill){
            $this->ill= $ill;
        }

        public function getIll(){
            return $this->ill;
        }
    }

?>