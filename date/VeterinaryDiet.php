<?php

    include_once __DIR__ . "/Alimentation.php";


    class VeterinaryDiet extends Alimentation{
        protected $ill;

        function __construct($ill,$typeOfFood, $weight, $isAdult, $isSterilized, $name, $brand, $price, $animal)
        {
            parent::__construct($name, $brand, $price, $animal, $typeOfFood, $weight, $isAdult, $isSterilized);
            $this->ill = $ill;
        }
    }

?>