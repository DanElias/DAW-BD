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
                <h3 class="my_header_text">Lab 9 DAW</h3>
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