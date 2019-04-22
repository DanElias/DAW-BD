<?php

    require_once("html_structures.php");
    require_once("logical_functions.php");

    _header();
    
    _parallax("partials/images/si5.jpg");
    
    _simple_white_section("LAB 26 DAW", "El último Lab: Accesibilidad");
    
    include_once("partials/index.html");
    
   /* $QRCodeReader = new Libern\QRCodeReader\QRCodeReader();
    $qrcode_text = $QRCodeReader->decode(base64_encode("image_stream"));
    echo $qrcode_text;*/

    _footer();

    //phpinfo();//muestra información de php
?>