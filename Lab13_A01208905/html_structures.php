<?php

    //Con esta función mando llamar al header
    function _header() {
        include("partials/_header.html");
    }

    function _header_user() {
        include("partials/_header_user.html");
    }

    //Con esta función puedo crear todos los contenedores parallax que yo quiera solo llamando a la función y mandándole el url de la imagen, que comunmente estaran en /partials/images/
    function _parallax($image_url){
        $parallax_container=
        '<div class="parallax-container z-depth-4">
            <header id="home_header"> 
            <section>
                <h3 class="my_header_text">Lab 13 DAW</h3>
            </section>
            </header>
            <div class="parallax ">';
        
          $parallax_container.='<img src="'.$image_url.'"width="100%" >
            </div>
        </div>';
        echo $parallax_container;
    }

    //Con esta función creo una sección en blanco simple con un título y descripción
    function _simple_white_section($title, $description){
        $white_section=
        '<div class="section white z-depth-5">
            <div class="row container">
                <h2 class="header my_heading_text">'.$title.'</h2>
                <p class="grey-text text-darken-3 lighten-2 my_normal_text">'.$description.'</p>
                <br><br>
            </div>
        </div>';
            
        echo $white_section;
    }

    //Con esta función se crea una sección parallax pero con 3 columnas disponbles para información encima de la foto de fondo para un desplegado de información atractivo
    function _parallax_three_columns(){
        $parallax_3cols=
        '
        <div class="parallax-container my_parallax_container" id="about">
            <div class="my_table">
                <br><br>
                <div class="row">
                    <div class="col s12 my_table_title hoverable">Ejercicio! 😉</div>
                </div>
                <br>
                 <div class="row">
                    <div class="col s4">
                        Esta es la columna 1
                    </div>
                     
                    <div class="col s4">
                        Esta es la columna 2
                    </div>
                     
                    <div class="col s4">
                        Esta es la columna 3
                    </div>
                </div><br><br>
            </div>
            <div class="parallax"><img src="partials/images/si1.jpg" width="100%" ></div>
        </div>
        ';
        
        echo $parallax_3cols;
    }

    function _lab13cases(){
        $parallax_3cols=
        '
        <div class="parallax-container my_parallax_container" id="about">
            <div class="my_table">
                <br><br>
                <div class="row">
                    <div class="col s12 my_table_title hoverable">¡Inicia sesión!</div>
                </div>
                <br>
                
                <!-- este es el trigger del form del modal-->
                 <div class="row"> 
                    <div class="col s12"> 
                        <a class="modal-trigger waves-effect waves-light btn  blue hoverable" id="boton_form_sesion" href="#_form_sesion">Iniciar sesión<i class="material-icons right">person_add</i></a>  
                    </div>
                </div><br>
                
                <!-- estas son las preguntas que se contestan en cada lab-->
                 <div class="row" id="preguntas"> 
                    <div class="col s12"> 
                    <strong>¿Por qué es una buena práctica separar el controlador de la vista?
                    </strong><br><br>Porque de esta manera tienes más control sobre lo que se está incluyendo en el código. De esta manera tenemos todo más organizado y sabes qué es lo que en verdad se está enviando al servidor y lo que esté está regresando y validando.
                    </div>
                </div><br>
                
                 <div class="row"> 
                    <div class="col s12"> 
                    <strong>Aparte de los arreglos $_POST y $_GET, ¿qué otros arreglos están predefinidos en php y cuál es su función?
                    </strong><br><br>$GLOBALS: contiene una referencia a cada variable que tiene un scope global en el código.<br><br>$_SERVER: tiene información de la dirección de headers, scripts y paths.<br><br>$_FILES: los items que han sido cargados al script a través del Post.<br><br>$_REQUEST: tiene los contenidos de $_GET, $_POST, $_COOKIE<br><br>$_SESSION: tiene las variables de sesión<br><br>$_PHP_SELF: tiene el nombre del archivo php que lo contiene.<br><br>$php_errormsg: Tiene el texto del último error generado por el PHP
                    </div>
                </div><br>
                
                 <div class="row"> 
                    <div class="col s12"> 
                    <strong>Explora las funciones de php, y describe 2 que no hayas visto en otro lenguaje y que llamen tu atención?</strong><br><br>array_key_exists(): devuelve true si la llave está en el array. Es cualquier valor posible para índice de un array.
                    method_exists(): devuelve true si el objeto dado tiene el método que se está buscando.[2]
                    </div>
                </div><br>
                
                <div class="row" id="preguntas"> 
                    <div class="col s12"> 
                    <strong>¿Qué es XSS y cómo se puede prevenir?
                    </strong><br><br>Cross-Site Scripting Attacks
                    Es agregar código malicioso para ser ejecutado en los sitios web. Puede ser como un hyperlink que lleve al usuario a otro sitio. La pantalla del sitio será muy similar y el usuario no se dará cuenta de que es otro sitio y mandará sus datos. Con XSS se incluyen etiquetas script que cambian la ejecución del sitio.
                    Con htmlspecialchars se filtra la salida del contenido que se muestra en el navegador. También puede usarse html entities.[3]<br><br>[1]https://www.tutorialspoint.com/php/php_predefined_variables.htm<br>[2]https://www.exakat.io/top-100-php-functions/<br>[3]https://manuais.iessanclemente.net/index.php/Evitar_ataques_XSS_y_CSRF_con_PHP
                    </div>
                </div><br>
                
            </div>
            <div class="parallax"><img src="partials/images/bg1.jpg" width="100%" ></div>
        </div>
        ';
        
        echo $parallax_3cols;
    }
    
     function _footer() {
        include("partials/_footer.html");
    }

    function imprimir_titulo($titulo) {
        echo "<h1>$titulo</h1>";
    }

    function _form_evento(){
        include("partials/_form_evento.html");
    }
    
    function _form_sesion(){
        include("partials/_form_sesion.html");
    }

    function _modal_confirm(){
        include("partials/_modal_confirm.html");
    }

    

?>