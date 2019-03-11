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

    function _parallax_simple($image_url){
        $parallax_container=
        '<div class="parallax-container z-depth-4">
            <header id="home_header"> 
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
                
                <br><br>
                <div class="row">
                    <div class="col s12 my_table_title hoverable">¡Sube una Imagen!</div>
                </div>
                <br>
                
                <!-- este es el trigger del form del modal-->
                 <div class="row"> 
                    <div class="col s12"> 
                        <a class="modal-trigger waves-effect waves-light btn amber hoverable" id="boton_form_subir_imagen" href="#_form_subir_imagen">Subir imagen<i class="material-icons right">arrow_upward</i></a>  
                    </div>
                </div><br>
                
                <!-- estas son las preguntas que se contestan en cada lab-->
                 <div class="row" id="preguntas"> 
                    <div class="col s12"> 
                    <strong>¿Por qué es importante hacer un session_unset() y luego un session_destroy()?
                    </strong><br><br>Se necesita para que se borre el valor de las variables de sesión y para que el array de sesión se vacíe o se destruya. De esta manera al dar cerrar sesión se asegura que no se guarde nada de información que pueda ser usada de manera maliciosas por otras personas.[1]
                    </div>
                </div><br>
                
                 <div class="row"> 
                    <div class="col s12"> 
                    <strong>¿Cuál es la diferencia entre una variable de sesión y una cookie?
                    </strong><br><br>Una cookie es  información almacenada por el navegador y enviada al servidor en cada request. SESSION es un array de datos almacenados en el servidor y asociados con un usuario determinado (generalmente a través de una cookie que contiene un código de identificación). [2]
                    </div>
                </div><br>
                
                 <div class="row"> 
                    <div class="col s12"> 
                    <strong>¿Qué técnicas se utilizan en sitios como facebook para que el usuario no sobreescriba sus fotos en el sistema de archivos cuando sube una foto con el mismo nombre?</strong><br><br>Lo que facebook hace es que a cada foto que se sube se le asigna un identificador único, en realidad la foto en los servidores de facebook ya no tiene el mismo nombre que tenía la foto cuando la subiste.
                    </div>
                </div><br>
                
                <div class="row" id="preguntas"> 
                    <div class="col s12"> 
                    <strong>¿Qué es CSRF y cómo puede prevenirse?
                    </strong><br><br>Cross-Site Scripting Attacks
                   Cross Site Request Forgery.Para que se pueda llevar a cabo un ataque mediante CSRF, en primera instancia, el atacante debe conseguir vulnerar e ingresar código HTML en un determinado servidor que podemos llamar “A”. Por otro lado, la víctima establece una conexión legÍtima con una aplicación web en otro servidor, que llamaremos “B” La víctima accede a la aplicación web donde se encuentra el código introducido por el atacante. El navegador de la víctima realiza una petición contra la aplicación del servidor web “B” sin que el usuario se entere. Para prevenirse lo que se puede hacer es que el usuario no guarde contraseñas de usuarios, o use el modo incógnito. Cerrar la sesión del usuario cuando esta ya no sea utilizada después de cierto tiempo. Bloquear que los POST no se envíen de manera automática sin antes preguntar al usuario[3]<br><br>[1]https://www.tutorialspoint.com/php/php_sessions.htm<br>[2]https://stackoverflow.com/questions/6339783/what-is-the-difference-between-sessions-and-cookies-in-php<br>[3]https://www.welivesecurity.com/la-es/2015/04/21/vulnerabilidad-cross-site-request-forgery-csrf/
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
    
    function _form_subir_imagen(){
        include("partials/_form_subir_imagen.html");
    }

    function _modal_confirm(){
        include("partials/_modal_confirm.html");
    }

    

?>