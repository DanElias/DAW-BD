<?php
    
    require_once("_conection_queries_db.php");
    $pattern=strtolower($_GET['pattern']);
    $words=array();
    $result=obtenerEventos();
    
    if(mysqli_num_rows($result)>0){

        while($row=mysqli_fetch_assoc($result)){
          array_push($words,$row["nombre"]); // guarda los nombres de todos los eventos en un array
        }
    }
    else{
        echo 'No existe evento con ese nombre';
    }
      
    $response=""; // donde se van a guardar los nombres de los eventos que hacen match con el pattern
    $size=0;
    
    for($i=0; $i<count($words); $i++)
    {
       $pos=stripos(strtolower($words[$i]),$pattern); // hacer la comparación de strings
       if(!($pos===false))
       {
         $size++;
         $word=$words[$i];
         $response.="<option value=\"$word\">$word</option>";
       }
    }
    
    if($size>0)
    
    echo "<select id=\"list\" size=$size onclick=\"selectValue()\">$response</select>";
?>