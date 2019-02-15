<?php

    function tabla_multiplicar() {
        
        $tabla = "<table>";
        for ($i=1; $i <= 10; $i++) {
            $tabla .= "<tr>";
            for ($j=1; $j <= 10; $j++) {
                $tabla .= "<td>$i x $i = ".$i*$j."</td>";
            }
            $tabla .= "</tr>";
        }
        $tabla .= "</table>";
        return $tabla;
    }
    
    function encabezado() {
        include("partials/_header.html");
    }
    
     function footer() {
        include("partials/_header.html");
    }

    function imprimir_titulo($titulo) {
        echo "<h1>$titulo</h1>";
    }

?>