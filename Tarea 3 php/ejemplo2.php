<?php
    if(isset($_GET['nombres'])) {  // Verifico se se envio el prarametro 'nombres' medianre la URL
        $nombres = $_GET['nombres'];
        $nombresArray = explode(',', $nombres); // Separo los nombres utilizando la coma como delimitador
        echo "Los nombres ingresados por el usario son: <br>";
        foreach($nombresArray as $nombre) { // Recorro el array de nombres y los muestro en una linea diferente
            echo "<p>$nombre</p><br>";  
        }
        echo "<br>";
        echo "Total de nombres ingresados: " . count($nombresArray); // Cuento el total de nombres ingresados utilizando la funcion count() y lo muestro en pantalla
    }
?>