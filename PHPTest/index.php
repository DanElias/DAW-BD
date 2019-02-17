<?php

    require_once("html_structures.php");
    require_once("logical_functions.php");

    _header();
    
    _parallax("partials/images/si5.jpg");
    
    _simple_white_section("LAB 9 DAW ✌", "Toda la estructura de esta página funciona con PHP :)");
    
    _lab9cases();

    imprimir_titulo("Esta es la tabla de cuadrados cubos");

    _footer();
    
    //phpinfo();//muestra información de php
?>