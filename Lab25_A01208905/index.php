<?php

    require_once("html_structures.php");

    if (session_status() == PHP_SESSION_NONE){ // como vuelvo a llamar a este php, solo debo inicializar $_SESSION[] una vez
        session_start();
    }

    if(isset($_SESSION["usuario"])){
        _header_user();
    }
    else{
        _header();
    }
    
    _parallax("partials/images/si5.jpg");
    
    _simple_white_section("LAB 25 DAW", "REST :)");

    _labcases();

    _footer();
?>