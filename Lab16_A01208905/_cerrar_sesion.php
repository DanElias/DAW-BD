<?php
    require_once("html_structures.php");
    session_start();
    session_unset();
    session_destroy();
    _header();
    _form_sesion();
    _simple_white_section("¡Has cerrado la sesión!", "La sesión se ha cerrado exitosamente");
    _footer();
?>