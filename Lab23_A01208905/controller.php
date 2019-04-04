<?php

    require_once("_conection_queries_db.php");
    $pattern=strtolower($_GET['pattern']);
    
    $nombres=array();
    $result=obtenerEventos();
    
    
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
          array_push($nombres,$row["nombre"]);
        }
    }
    
    $size=0;

    $response="";
    $size=0;
    for($i=0; $i<count($nombres); $i++)
    {
       $pos=stripos(strtolower($nombres[$i]),$pattern);
       if(!($pos===false))
       {
         $size++;
         $nombre=$nombres[$i];
         $response.='<option value=\"'.$nombre.'\">'.$nombre.'</option>';
       }
    }
    if($size>0)
      echo '<select id=\"list_nombres\" size=$size onclick=\"selectValue()\">'.$response.'</select>';
?>