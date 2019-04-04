<?php
    
    require_once("_conection_queries_db.php");
    $pattern=strtolower($_GET['pattern']);
    
    $ids=array();
    $nombres=array();
    $fechas=array();
    $lugares=array();
    $descripciones=array();
    
    $result=obtenerEventos();
    
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
          array_push($ids,$row["id_evento"]); // guarda los nombres de todos los eventos en un array
          array_push($nombres,$row["nombre"]);
          array_push($fechas,$row["fecha"]);
          array_push($lugares,$row["lugar"]);
          array_push($descripciones,$row["descripcion"]);
        }
    }
    
    $size=0;
    
    for($i=0; $i<count($nombres); $i++)
    {
       $pos=stripos(strtolower($nombres[$i]),$pattern); // hacer la comparación de strings
       if(!($pos===false))
       {
        $size++;
        $id=$ids[$i];
        $nombre=$nombres[$i];
        $fecha=$fechas[$i];
        $lugar=$lugares[$i];
        $descripcion=$descripciones[$i];
        $response.= '<tr>
                        <td>'.$id.'</td>
                        <td>'. $nombre.'</td>
                        <td>'.$fecha.'</td>
                        <td>'.$lugar.'</td>
                        <td>'.$descripcion.'</td>
                    </tr>';
       }
      
    }
    
    if($size>0){
        echo  '<div class="responsive-table table-status-sheet"> 
                    <table class="my_table2">
                    <tr>
                        <th>ID Evento</th> 
                        <th>Nombre Evento</th> 
                        <th>Fecha Evento</th> 
                        <th>Lugar Evento</th> 
                        <th>Descripcion Evento</th> 
                    </tr>'.$response.'</table> </div>';
    }
    
    
?>