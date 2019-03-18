<?php

    require_once("html_structures.php");
    session_start();

    $error;
    $usuario;

    if(isset($_POST["submit"])) {
        //Aquí guardo lo que está en los campos del form en variables
        $_POST["nombre_usuario"] = htmlentities($_POST["nombre_usuario"]);
        $_POST["contraseña"] = htmlentities($_POST["contraseña"]);
        
    //Aquí checo que se hayan llenado todos los campos y que no sólo estén vacíos
       if (isset($_POST["nombre_usuario"]) && isset($_POST["contraseña"]) && $_POST["nombre_usuario"]!="" && $_POST["contraseña"]!=""){
               
           // si no hay errores entonces mostrar pantalla de éxito
                if(!checksession($error) && checkuser($usuario)!=""){
                    $_SESSION["usuario"] = $usuario; // se asigna la sesion si todo fue exitoso
                    _header_user();
                    _form_sesion();
                    // html special chars se utiliza para evitar ataques Cross Site Scripting
                    $info="Bienvenido: ".htmlspecialchars(htmlentities($_SESSION["usuario"]), ENT_QUOTES, 'UTF-8');
                    _simple_white_section("¡Has iniciado sesión!", $info);
                   _footer();
                }
                // si hay errores revisar cuáles son y mostrarlos
                else{
                    $error="<br><br> No se ha podido iniciar sesion";
                    checksession($error);
                    include("index.php");
                }
               
       } else {
            $error = "Olvidaste llenar todos los campos <br> No se ha podido iniciar sesión.";
            include("index.php");
       }
    } else {
        include("index.php");
    }

function checksession(&$error){
    //se validan los datos de usuario o contraseña ingresados.
    if(!($_POST["nombre_usuario"]=="dan")) {
        $error.= "\n El nombre de usuario o contraseña son incorrectos.";
        return true;
    }  
    
    if(!($_POST["contraseña"]=="123")) {
        $error.= "\n El nombre de usuario o contraseña son incorrectos.";
        return true;
    }  
    
    return false;
}

function checkuser(&$usuario){ //pasar por referencia para que se guarde la variable
        $usuario = "";
        if ($_POST["nombre_usuario"] == "dan" && $_POST["contraseña"] == "123") {
            $usuario = "Daniel Elias";
        } 
        return $usuario;
}



    
?>