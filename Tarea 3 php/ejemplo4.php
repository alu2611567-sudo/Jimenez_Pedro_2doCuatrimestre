<?php
    if(isset($GET['numeros'])) {  // Verifico se se envio el prarametro 'numeros' medianre la URL
        $numeros = $_GET['numeros'];
        $numerosArray = explode(',', $numeros); // Separo los numeros utilizando la coma como delimitador
        $suma = array_sum($numerosArray); // Calculo la suma de los numeros utilizando la funcion array_sum()
        foreach($numerosArray as $numero) {
            $suma += $numero; // Calculo la suma de los numeros utilizando un ciclo foreach
        }
        $numero_mayor = max($numerosArray); // Calculo el numero mayor utilizando la funcion max()
        $numero_menor = min($numerosArray); // Calculo el numero menor utilizando la funcion min()
        $promedio = $suma / count($numerosArray); // Calculo el promedio de los numeros utilizando la formula: promedio = suma / cantidad de numeros
        echo "La suma de los numeros ingresados es: " . $suma . "<br>";
        echo "El promedio de los numeros ingresados es: " . $promedio . "<br>";
        echo "El numero mayor de los numeros ingresados es: " . $numero_mayor . "<br>";
        echo "El numero menor de los numeros ingresados es: " . $numero_menor . "<br>";
    }
?>