<?php
    class Frog extends Animal
    {
        public $jump;
        public function get_jump()
        {
            echo "Jump : ";
            return $this->jump = "Hop Hop" . "<br>";
        }
    }

?>