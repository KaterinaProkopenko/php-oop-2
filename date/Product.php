<?php
    class Product {
        protected $productName;
        protected $brand;
        protected $price;
        protected $description;

        function __construct($productName, $brand, $price, $description)
        {
            $this->productName = $productName;
            $this->brand = $brand;
            $this->price = $price;
            $this->description = $description;
        }

        public function setProductName($productName){
            $this->productName = $productName;
        }

        public function getProductName(){
            return $this->productName;
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