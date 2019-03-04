<?php

    require_once("html_structures.php");

    if(isset($_POST["submit"])) {
        //Aquí guardo lo que está en los campos del form en variables
        $_POST["nombre_evento"] = htmlentities($_POST["nombre_evento"]);
        $_POST["fecha_evento"] = htmlentities($_POST["fecha_evento"]);
        $_POST["hora_evento"] = htmlentities($_POST["hora_evento"]);
        $_POST["lugar_evento"] = htmlentities($_POST["lugar_evento"]);
        $_POST["descripcion_evento"] = htmlentities($_POST["descripcion_evento"]);
        
    //Aquí checo que se hayan llenado todos los campos y que no sólo estén vacíos
       if (isset($_POST["nombre_evento"]) && isset($_POST["hora_evento"]) && isset($_POST["fecha_evento"]) && isset($_POST["lugar_evento"]) && isset($_POST["descripcion_evento"]) && $_POST["nombre_evento"] != "" && $_POST["fecha_evento"] != "" && $_POST["hora_evento"] != "" && $_POST["lugar_evento"] != "" && $_POST["descripcion_evento"] != ""){
                if(!check()){
                    $_POST["fecha_evento"]
                    $error = "1. Hay errores en la fecha. Introduce una fecha válida";
                    include("index.php");
                }
                else{
                    include("partials/_header.html"); // se vuelve a cargar una página
                    include("partials/_modal1.html");
                    _modal_confirm();
                    _modal_form();
                    $info .="Se ha guardado el evento: ".$_POST["nombre_evento"];
                    _simple_white_section("¡Éxito!", $info);
                   include("partials/_footer.html");
                }
                
       } else {
            $error = "1. Olvidaste llenar todos los campos del formulario";
            include("index.php");
       }
    } else {
        include("index.php");
    }

function check(){
    $input_date = '03/02/2020';
    $test_date  = explode('/', $input_date);
    $current_date = date("m/d/Y");
    $test_current = explode('/', $current_date);
    if ($test_date[2]<=$test_current[2] ) {
        return true;
    }  
    return false;
}

    
?>