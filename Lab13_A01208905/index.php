<?php

    require_once("html_structures.php");
    require_once("logical_functions.php");

    _header();

    include("error_handling_alerts.php");
    
    _parallax("partials/images/si5.jpg");
    
    _simple_white_section("LAB 11 DAW", "Toda la estructura de esta página funciona con PHP :)");

    _lab11cases();

    _modal_form();
    _modal_confirm();

    _footer();
?>