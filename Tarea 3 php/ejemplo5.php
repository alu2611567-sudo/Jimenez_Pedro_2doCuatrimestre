<?php
    // Ejemplo 5
    if(isset($_GET['numero_base']) && isset($_GET['numero_multiplicar'])){
        $numero_base = $_GET['numero_base'];
        $multiplicador = $_GET['numero_multiplicar'];
        echo "<h2> Tabla de multiplicar del numero: {$numero_base} hasta {$multiplicador} </h2> ";
        for($i = 1; $i <= $multiplicador; $i++){
            $multiplicacion = $numero_base * $i;
            echo "<p> {$numero_base} * {$i} = {$multiplicacio} </p>";
        }
    }
?>