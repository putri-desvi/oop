<?php
    class Animal {
        public $name;
        public $legs;
        public $cold_blooded = "no";
        public function __construct($name, $legs)
        {
            $this->name= $name;
            $this->legs= $legs;
        }
        public function get_name()
        {
            echo "Name : ";
            return $this->name . "<br>";
        }
        public function get_legs()
        {
            echo "legs : ";
            return $this->legs . "<br>";
        }
        public function get_cold_blooded()
        {
            echo "cold blooded : ";
            return $this->cold_blooded . "<br>";
        }

    }

?>