<?php

    require_once 'animal.php';
    require_once 'ape.php';
    require_once 'frog.php';
    
    //Release 0
    $sheep = new Animal("shaun", 4);
    echo $sheep->get_name();
    echo $sheep->get_legs();
    echo $sheep->get_cold_blooded() . "<br>";

    //Release 1
    $kodok = new Frog("buduk", 4);
    echo $kodok->get_name();
    echo $kodok->get_legs();
    echo $kodok->get_cold_blooded();
    echo $kodok ->get_jump(). "<br>";

    $sungokong = new Ape("kera sakti", 2);
    echo $sungokong->get_name();
    echo $sungokong->get_legs();
    echo $sungokong->get_cold_blooded();
    echo $sungokong->get_yell(). "<br>";

?>