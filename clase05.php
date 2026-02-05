<?php
// Funciones de PHP
// Funcion 

// Definicion de una funcion, que recibe 
function saludar($nombre){
    echo "<p>Hola, $nombre. Bienvenido a la clase de PHP.</p>";
}

saludar ("Juan");

$nombre_alumno = "María";
saludar($nombre_alumno); // No es necesario que el argumento sea una cadena literal

// Funcion que reciba varios parametros
function informacion_personal($nombre, $edad, $ciudad, $estatura, $peso, $profesion){
    $imc = $peso / ($estatura * $estatura);
    echo "<p> Nombre: $nombre </p> <br>";
    echo "<p> Edad: $edad años </p> <br>";
    echo "<p> Ciudad: $ciudad </p> <br>";
    echo "<p> Estatura: $estatura metros </p> <br>";
    echo "<p> Peso: $peso kg </p> <br>";
    echo "<p> Profesion: $profesion </p> <br>";
    echo "<p> Indice de Masa Corporal (IMC): " . round($imc, 2) . "</p> <br>";
    if ($imc < 18.5) {
        echo "<p> Categoria: Bajo peso </p> <br>";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "<p> Categoria: Peso normal </p> <br>";
    } elseif ($imc >= 25 && $imc < 29.9) {
        echo "<p> Categoria: Sobrepeso </p> <br>";
    } else {
        echo "<p> Categoria: Obesidad </p> <br>";
    }
}

informacion_personal("Luis", 28, "Madrid", 1.75, 70, "Ingeniero"); //llamada a la funcion con argumentos en el orden correcto
informacion_personal("Ana", 32, "Barcelona", 1.60, 60, "Diseñadora");
?>