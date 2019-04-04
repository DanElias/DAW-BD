<?php

    // en este php mando llamar mis funciones de query y conexiones con la base de datos
    require_once("_conection_queries_db.php");
    require_once("html_structures.php");

    $_GET['id']= htmlentities($_GET['id']);
    $result=obtenerEventosPorID($_GET['id']);
    $edit_form;
   
    if(mysqli_num_rows($result)>0){
        //output data of each row;
        while($row = mysqli_fetch_assoc($result)){
            
            $edit_form='
            
            <!-- Modal Structure -->
                <div id="_form_editar_evento" class="modal my_modal modal1 _form_editar_evento" name="modal1">
                    <div class="row my_modal_header_row">
                        <div  class="my_modal_header1 z-depth-2 col s12">
                            <h4 class="my_modal_header ">Editar Evento</h4>  
                        </div> 
                    </div>
                    <br><br><br>
                    
                    <div class="modal-content my_modal_content">
                        <p>Aquí puede agregar un evento</p>
                        
                         <!-- Inicio del form de beneficiarios-->
                        <form class="col s12" action="_registro_editar_evento.php" method="post">  <!--MANDAR LLAMAR AL QUERY DE EDITAR-->
                            <!--Aqui esta a que php se llama-->
                            
                            <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">event</i>
                                  <input  type="text" class="validate" name="nombre_evento" value="'.$row['nombre'].'" required>
                                  <label>Nombre del evento</label>
                                  <input  type="hidden" name="id_evento" value="'.$row['id_evento'].'">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">calendar_today</i>
                                <input type="date" name="fecha_evento" value="'.$row['fecha'].'" required>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">place</i>
                                  <input  type="text" class="validate" name="lugar_evento" value="'.$row['lugar'].'" required>
                                  <label>Lugar</label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">description</i>
                                  <input  type="text" class="validate" name="descripcion_evento" value="'.$row['descripcion'].'" required>
                                  <label>Descripción</label>
                                </div>
                            </div>

                            <!-- botones de guardar y eliminar del modal con el form de agregar beneficiarios-->
                            <div class="my_modal_buttons">
                                <div class="row">
                                    <div class="col s6">
                                    <button class="btn waves-effect waves-light" type="submit" name="submit">Guardar
                                        <i class="material-icons right">check_circle_outline</i>
                                    </button>
                                    </div>
                                    <div class="col s6">
                                        <button class="btn waves-effect waves-light red" type="button">Cancelar
                                            <i class="material-icons right">highlight_off</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <!-- Final del form de beneficiarios-->
    
                    </div>
                </div>';
            
        }
        
        _header();
        echo '<body>';
        echo $edit_form;
        _simple_white_section_table("Editar Evento","Aqui debe de aparecer la ventana de editar evento");
        
        //----------ESTA PEQUEÑA PARTE DE MI SCRIPT SE LLAMA FELICIDAD -- ABRE UN MODAL EN AUTOMATICO---------------------------
        echo 
        "<script type='text/javascript'>
                    
                
                    jQuery(document).ready(function(){
                          jQuery('#_form_editar_evento').modal();
                          jQuery(document).ready(function(){
                              jQuery('#_form_editar_evento').modal('open');
                          });
                    });
        </script>";
        _footer();
    }
    else{ // si no hay eventos registrados en la tabla
        _header();
        _simple_white_section_table("No encontramos eventos registrados :(","");
       _footer();
    }

?>