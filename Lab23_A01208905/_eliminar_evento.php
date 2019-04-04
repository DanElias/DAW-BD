<?php

    require_once("html_structures.php");
    require_once("_conection_queries_db.php"); //Accedo a mi archivo de conection y queries con la base de datos

    $error;
    $_GET['id']= htmlentities($_GET['id']);

    //Aquí checo que se hayan llenado todos los campos y que no sólo estén vacíos
       if (isset($_GET['id']) && $_GET['id'] != ""){
                    //EN ESTA PARTE A CONTINUACION HARÉ EL REGISTRO EN LA BASE DE DATOS
                    //PODEMOS VER QUE LO DEMÁS DEL CÓDIGO ES LA PARTE QUE VALIDA QUE EL FORM SE LLENÓ DE MANERA CORRECTA.
                    //------------------------------------------------------------------------------------------------------------
                    if(eliminarEventoPorID($_GET['id'])){
                        //Si se lograron eliminar los datos en la Base de Datos: Mandar mensaje de éxito
                        include("partials/_header.html"); // se vuelve a cargar una página
                        // html special chars se utiliza para evitar ataques Cross Site Scripting
                        $info="Se ha eliminado el evento. ";
                        _simple_white_section("¡Listo!", $info);
                       include("partials/_footer.html");
                    }
                    else{
                        //Si no se lograron registrar los datos en la Base de Datos: Mandar mensaje de error :(
                        include("partials/_header.html"); // se vuelve a cargar una página
                        // html special chars se utiliza para evitar ataques Cross Site Scripting
                        $info="No hemos podido eliminar el evento.";
                        _simple_white_section("Lo sentimos :(", $info);
                       include("partials/_footer.html");
                    }
                    //--------------------------------------------------------------------------------------------------------------
       } else {
            $error = "Por el momento no podemos eliminar el evento. Inténtalo más tarde";
            include("index.php");
       }
?>