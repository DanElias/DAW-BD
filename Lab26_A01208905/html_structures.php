<?php

    //Con esta función mando llamar al header
    function _header() {
        include("partials/_header.html");
    }

    //Con esta función puedo crear todos los contenedores parallax que yo quiera solo llamando a la función y mandándole el url de la imagen, que comunmente estaran en /partials/images/
    function _parallax($image_url){
        $parallax_container=
        '<div class="parallax-container z-depth-4">
            <header id="home_header"> 
            <section>
                <h3 class="my_header_text dark_header">Lab 26 DAW</h3>
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
        '<div class="section white z-depth-5 section_dark">
            <div class="row container">
                <h2 class="header my_heading_text  dark_header">'.$title.'</h2>
                <p class="grey-text text-darken-3 lighten-2 my_normal_text dark_text">'.$description.'</p>
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

    function _lab9cases(){
        $parallax_3cols=
        '
        <div class="parallax-container my_parallax_container" id="about">
            <div class="my_table">
                <br><br>
                <div class="row">
                    <div class="col s12 my_table_title hoverable">Test Cases! 😉</div>
                </div>
                <br>
                
                <div class="row"> 
                    <div class="col s12"> 
                        Promedio de un arreglo de números 
                    </div>
                </div><br>
                 <div class="row"> 
                    <div class="col s12"> 
                        <a class="waves-effect waves-light btn" id="boton_array_average"><i class="material-icons right">touch_app</i>Try it!</a>
                    </div>
                </div><br>
                
                <div class="row"> 
                    <div class="col s12" id="array_average"> 
                        
                    </div>
                </div><br>
                
                <div class="row"> 
                    <div class="col s12"> 
                        Mediana de un arreglo de números 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col s12">
                        <a class="waves-effect waves-light btn" id="boton_array_median"><i class="material-icons right">touch_app</i>Try it!</a>
                    </div>
                </div><br>
                
                 <div class="row"> 
                    <div class="col s12" id="array_median"> 
                        
                    </div>
                </div><br>
                
                <div class="row"> 
                    <div class="col s12"> 
                        Análisis de un arreglo de números 
                    </div>
                </div><br>
                <div class="row">
                    <div class="col s12">
                        <a class="waves-effect waves-light btn" id="boton_array_analisis"><i class="material-icons right">touch_app</i>Try it!</a>
                    </div>
                </div><br>
                
                
                 <div class="row"> 
                    <div class="col s12" id="array_analisis"> 
                        
                    </div>
                </div><br>
                
                <div class="row"> 
                    <div class="col s12"> 
                        Tabla de cuadrados y cubos
                    </div>
                </div><br>
                <div class="row">
                    <div class="col s12">
                        <a class="waves-effect waves-light btn" id="boton_cuadrados_cubos"><i class="material-icons right">touch_app</i>Try it!</a>
                    </div>
                </div><br>
                
                <div class="row"> 
                    <div class="col s12" id="cuadrados_cubos"> 
                        
                    </div>
                </div><br>
                
                <div class="row"> 
                    <div class="col s12"> 
                        Almost Lucky <br>Petya loves lucky numbers. We all know that lucky numbers are the positive integers whose decimal representations contain only the lucky digits 4 and 7. For example, numbers 47, 744, 4 are lucky and 5, 17, 467 are not. Unfortunately, not all numbers are lucky. Petya calls a number nearly lucky if the number of lucky digits in it is a lucky number. He wonders whether number n is a nearly lucky number. Print if the numbers is nearly a lukcy number.
                    </div>
                </div><br>
                <div class="row">
                    <div class="col s12">
                        <a class="waves-effect waves-light btn" id="boton_acmproblem"><i class="material-icons right">touch_app</i>Try it!</a>
                    </div>
                </div><br>
                
                 <div class="row"> 
                    <div class="col s12" id="acmproblem"> 
                        
                    </div>
                </div><br>
                
                 <div class="row" id="preguntas"> 
                    <div class="col s12"> 
                    <strong>¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención?</strong><br><br>Esta función muestra información de php como la configuración, versión, elementos habilitados. Los datos que me llamaron la atención fueron: 1. Que el default time zone es Berlín. Me gustaría saber por qué o sí ahí fue donde crearon PHP. También me llamó la atención que hay una zona que muestra información de mi computadora, hasta de programas que no tienen nada que ver con PHP como Minitab, entonces me pregunto si con phpinfo podría ver la información de los servidores donde están otras páginas web. Y finalmente se me hace una buena idea que hayan puesto los créditos de las personas involucradas en php.  
                    </div>
                </div><br>
                
                 <div class="row"> 
                    <div class="col s12"> 
                    <strong>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</strong><br><br>Se debe de tener instalado con software como wamp o xampp que permita tener acceso a programas como Apache, PHP o MySQL. Los proyectos se deben de crear bajo carpetas como htdocs para que puedan ejecutarse. Si se quisiera usar también como un servidor que despliegue páginas o aplicaciones al público primero se debe de encontrar los archivos php.ini. Se deben de realizar cambios en la sección de error handling para que los errores no se muestren al público.[1]
                    </div>
                </div><br>
                
                 <div class="row"> 
                    <div class="col s12"> 
                    <strong>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica</strong><br><br>En un sitio web más dinámico como Facebook, se utiliza PHP para generar contenido desde la base de datos y se transforma en una matriz de datos o un JSON que es solicitado por un script AJAX que se ejecuta en el navegador de los usuarios, esta matriz de datos JSON se convierte en HTML a través de javascript. Los navegadores web ya incluyen la manera de interpretar el HTML para desplegar las páginas web. Si se usa PHP los navegadores no saben interpretarlo, entonces todo se manda al servidor, el servidor interpreta el código y manda como respuesta HTML estático que si puede ser interpretado por el navegador.[2][3] <strong><hr>REFERENCIAS</strong><br><br>[1]https://www.codementor.io/php/tutorial/how-to-setup-php-development-production-server<br><br>[2]https://www.quora.com/How-does-PHP-work-with-HTML<br><br> [3]https://www.quora.com/Why-do-we-need-a-web-server-to-run-PHP-but-not-HTML
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

?>