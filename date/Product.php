<?php
include_once __DIR__ . "/Buy.php";

    class Product extends Buy {
        protected $name;
        protected $brand;
        protected $price;
        protected $description;

        function __construct($name, $brand, $price, $description, $animal)
        {
            parent::__construct($animal);
            $this->name = $name;
            $this->brand = $brand;
            $this->price = $price;
            $this->description = $description;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setBrand($brand){
            $this->brand = $brand;
        }

        public function getBrand(){
            return $this->brand;
        }

        public function setPrice($price){
            $this->price = $price;
        }

        public function getPrice(){
            return $this->price;
        }

        public function setDescription($description){
            $this->description = $description;
        }

        public function getDescription(){
            return $this->description;
        }
    }

?>