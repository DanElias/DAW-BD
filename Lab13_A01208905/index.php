<?php

    require_once("html_structures.php");
    require_once("logical_functions.php");

    if (session_status() == PHP_SESSION_NONE){ // como vuelvo a llamar a este php, solo debo inicializar $_SESSION[] una vez
        session_start();
    }

    if(isset($_SESSION["usuario"])){
        _header_user();
    }
    else{
        _header();
    }
    
    include("error_handling_alerts.php");
    
    _parallax("partials/images/si5.jpg");
    
    _simple_white_section("LAB 13 DAW", "Lab de Manejo de Sesiones con PHP :)");

    _lab13cases();

    _form_sesion();

    _footer();
?>