<?php
    class Ape extends Animal
    {
        public $yell;
        public function get_yell()
        {
            echo "Yell : ";
            return $this->yell = "Auooo" . "<br>";
        }
    }

?>