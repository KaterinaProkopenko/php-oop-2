<?php
include_once __DIR__ . "/Buy.php";

    class Product extends Buy {
        protected $name;
        protected $brand;
        protected $price;

        function __construct($name, $brand, $price, $animal)
        {
            parent::__construct($animal);
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
        }
    }

?>