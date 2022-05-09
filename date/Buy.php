<?php

    class Buy{
        protected $animal;

        function __construct($animal)
        {
            $this->animal = $animal;
        }

        public function setAnimal($animal){
            return $this->animal = $animal;
        }

        public function getAnimal(){
            return $this->animal;
        }
    }

?>