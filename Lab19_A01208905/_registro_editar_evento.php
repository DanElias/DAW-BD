<?php

    require_once("html_structures.php");
    require_once("_conection_queries_db.php"); //Accedo a mi archivo de conection y queries con la base de datos

    $error;

    if(isset($_POST["submit"])) {
        //Aquí guardo lo que está en los campos del form en variables
        $_POST["id_evento"] = htmlentities($_POST["id_evento"]);
        $_POST["nombre_evento"] = htmlentities($_POST["nombre_evento"]);
        $_POST["fecha_evento"] = htmlentities($_POST["fecha_evento"]);
        $_POST["hora_evento"] = htmlentities($_POST["hora_evento"]);
        $_POST["lugar_evento"] = htmlentities($_POST["lugar_evento"]);
        $_POST["descripcion_evento"] = htmlentities($_POST["descripcion_evento"]);
        
    //Aquí checo que se hayan llenado todos los campos y que no sólo estén vacíos
       if (isset($_POST["nombre_evento"]) && isset($_POST["fecha_evento"]) && isset($_POST["lugar_evento"]) && isset($_POST["descripcion_evento"]) && $_POST["nombre_evento"] != "" && $_POST["fecha_evento"] != "" && $_POST["lugar_evento"] != "" && $_POST["descripcion_evento"] != ""){
                // si no hay errores entonces mostrar pantalla de éxito
                if(!checkmydate($error) && !is_numeric($_POST["nombre_evento"]) && !is_numeric($_POST["descripcion_evento"]) && !is_numeric($_POST["lugar_evento"])){
                    
                    //EN ESTA PARTE A CONTINUACION HARÉ EL REGISTRO EN LA BASE DE DATOS
                    //PODEMOS VER QUE LO DEMÁS DEL CÓDIGO ES LA PARTE QUE VALIDA QUE EL FORM SE LLENÓ DE MANERA CORRECTA.
                    //------------------------------------------------------------------------------------------------------------
                    if(editarEvento($_POST["id_evento"],$_POST["nombre_evento"],$_POST["fecha_evento"],$_POST["lugar_evento"], $_POST["descripcion_evento"])){
                        //Si se lograron registrar los datos en la Base de Datos: Mandar mensaje de éxito
                        include("partials/_header.html"); // se vuelve a cargar una página
                        $input_date2 = $_POST["fecha_evento"];//Las fechas se guardan como 1998-03-28
                        $test_date2  = explode('-', $input_date2);
                        // html special chars se utiliza para evitar ataques Cross Site Scripting
                        $info="Se ha guardado el evento: ".htmlspecialchars(htmlentities($_POST["nombre_evento"]), ENT_QUOTES, 'UTF-8'). "<br><br> La fecha de este evento es: ".htmlspecialchars($test_date2[2])."/".htmlspecialchars($test_date2[1])."/".htmlspecialchars($test_date2[0])."<br><br> La hora del evento es: ".htmlspecialchars(htmlentities($_POST["hora_evento"]), ENT_QUOTES, 'UTF-8')." Hrs.<br><br> El lugar del evento es: ".htmlspecialchars(htmlentities($_POST["lugar_evento"]), ENT_QUOTES, 'UTF-8')."<br><br> Y su descripción es: ".htmlspecialchars(htmlentities($_POST["descripcion_evento"]), ENT_QUOTES, 'UTF-8');
                        _simple_white_section("¡Éxito!", $info);
                       include("partials/_footer.html");
                    }
                    else{
                        //Si no se lograron registrar los datos en la Base de Datos: Mandar mensaje de error :(
                        include("partials/_header.html"); // se vuelve a cargar una página
                        $input_date2 = $_POST["fecha_evento"];//Las fechas se guardan como 1998-03-28
                        $test_date2  = explode('-', $input_date2);
                        // html special chars se utiliza para evitar ataques Cross Site Scripting
                        $info="No hemos podido guardar el evento: ".$_POST["nombre_evento"]."<br> Inténtalo más tarde :(";
                        _simple_white_section("Lo sentimos :(", $info);
                       include("partials/_footer.html");
                    }
                    //--------------------------------------------------------------------------------------------------------------
                    
                }
                // si hay errores revisar cuáles son y mostrarlos
                else{
                    $error="<br><br> El evento no se ha podido registrar.";
                    checkmydate($error);
                    if(is_numeric($_POST["nombre_evento"])){
                        $error.="<br><br> El nombre del evento no debe incluir sólo números";
                    }
                    if(is_numeric($_POST["descripcion_evento"])){
                        $error.="<br><br> La descripción del evento no debe incluir sólo números";
                    }
                    if(is_numeric($_POST["lugar_evento"])){
                        $error.="<br><br> El lugar del evento no debe incluir sólo números";
                    }
                    include("index.php");
                }
               
       } else {
            $error = "Olvidaste llenar todos los campos del formulario <br> El evento no se ha podido registrar.";
            include("index.php");
       }
    } else {
        include("index.php");
    }

function checkmydate(&$error){
    $input_date = $_POST["fecha_evento"];//Las fechas se guardan como 1998-03-28
    $test_date  = explode('-', $input_date);
    $current_date = date("Y-m-d");
    $test_current = explode('-', $current_date);
    
    // se valida que no se registre un evento que tiene una fecha que ya pasó -> hay error
    if($test_date[0]<$test_current[0] ) {
        $error.= "\n Hay errores en la fecha: El año seleccionado ya pasó.";
        return true;
    }  
    // si se escoge un mes que ya paso de este mismo año -> hay error
    if($test_date[0]==$test_current[0] && $test_date[1]<$test_current[1]){ 
        $error.= "\n Hay errores en la fecha: El mes seleccionado ya pasó.";
        return true;
    }
    //si se escoge un día que ya paso de este mismo mes y año -> hay error
    if($test_date[0]==$test_current[0] && $test_date[1]==$test_current[1] && $test_date[2]<$test_current[2]){
        $error.= "\n Hay errores en la fecha: El día seleccionado ya pasó.";
        return true;
    }
    
    return false;
}



    
?>