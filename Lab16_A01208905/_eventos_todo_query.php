<?php

    // en este php mando llamar mis funciones de query y conexiones con la base de datos
    require_once("_conection_queries_db.php");
    require_once("html_structures.php");

    $result=obtenerEventos();
    $query_table;
    $query_table='<div class="responsive-table table-status-sheet">';
    $query_table.='<table class="my_table2">';
    $query_table.='<tr><th>ID Evento</th> <th>Nombre Evento</th> <th>Fecha Evento</th> <th>Lugar Evento</th> <th> Descripcion Evento</th> <th>Editar</th>  <th>Eliminar</th> </tr>';

    if(mysqli_num_rows($result)>0){
        //output data of each row;
        while($row = mysqli_fetch_assoc($result)){
            $row_date=explode('-',$row["fecha"]);
            $query_table.="<tr>";
            $query_table.='<td>'.$row["id_evento"].'</td>';
            $query_table.='<td>'.$row["nombre"].'</td>';
            $query_table.="<td>". $row_date[2]."/".$row_date[1]."/".$row_date[0]."</td>"; //le da formato dd/mm/YYYY a la fecha -> UX
            $query_table.="<td>".$row["lugar"]."</td>";
            $query_table.="<td>".$row["descripcion"]."</td>";
            $query_table.=
                    '<td>
                        <a class="btn btn-medium waves-effect waves-light modal-trigger amber darken-1 accent-3 hoverable" href="_eventos_editar_form.php?id='.$row['id_evento'].'">
                            <i class="material-icons">edit</i>
                        </a>
                    </td>';
            $query_table.=
                    '<td>
                        <a class="btn btn-medium waves-effect waves-light modal-trigger red accent-3 hoverable" href="_eliminar_evento.php?id='.$row['id_evento'].'">
                            <i class="material-icons">delete</i>
                        </a>
                    </td>';
            $query_table.="</tr>";
        }
        
        $query_table.='</table>';
        $query_table.='</div>';
        _header();
        _simple_white_section_table("!Estos son los eventos encontrados!",$query_table);
       _footer();
    }
    else{ // si no hay eventos registrados en la tabla
        _header();
        _simple_white_section_table("No encontramos eventos registrados :(","");
       _footer();
    }

?>