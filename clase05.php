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

// Funciones con parametros opcionales
function calcular_area_circulo($radio, $pi = 3.1416){
    $area = $pi * ($radio * $radio);
    return $area;
}

// Manejo de archivos en PHP
// fopen () - Esta funcion se utiliza para abrir un archivo. El primer parametro es el nombre del archivo y el segundo parametro es el modo de apertura (lectura, escritura, etc.)

function escribir_en_archivo($nombre_archivo, $contenido){
    $archivo = fopen($nombre_archivo, "w"); // Abrir el archivo en modo escritura
    if ($archivo === false) {
        echo "<p> No se pudo abrir el archivo $nombre_archivo </p>";
    }  else {
        fwrite($archivo, $contenido); // Escribir el contenido en el archivo
        fclose($archivo); // Cerrar el archivo
        echo "<p> Contenido escrito en el archivo $nombre_archivo </p>";
    }
}
escribir_en_archivo("archivo.txt", "Hola, este es un archivo de texto creado con PHP.");
escribir_en_archivo("archivo.txt", "Este es un nuevo contenido que sobrescribe el anterior.");
escribir_en_archivo("archivo.txt", "Este es un nuevo contenido que se agrega al final del archivo.", "a"); // Modo de apertura "a" para agregar al final del archivo

// modos de apertura de archivos:
// "r" - Lectura (read)
// "w" - Escritura (write) - Sobrescribe el archivo si ya existe o lo crea si no existe
// "a" - Agregar (append) - Agrega al final del archivo si ya existe o lo crea si no existe
// "x" - Crear (create) - Crea un nuevo archivo, pero falla si el archivo ya existe
// "r+" - Lectura y escritura (read/write) - Permite leer y escribir en el archivo, pero el archivo debe existir
// "w+" - Escritura y lectura (write/read) - Permite escribir y leer en el archivo, pero sobrescribe el archivo si ya existe o lo crea si no existe
// "a+" - Agregar y lectura (append/read) - Permite agregar al final del archivo y leerlo, pero el archivo debe existir o se crea si no existe
// "x+" - Crear y lectura (create/read) - Crea un nuevo archivo y permite leerlo, pero falla si el archivo ya existe

// Modo de apertura "a" para agregar al final del archivo
function agregar_al_archivo($nombre_archivo, $contenido){
    $archivo = fopen($nombre_archivo, "a"); // Abrir el archivo en modo agregar
    if ($archivo === false) {
        echo "<p> No se pudo abrir el archivo $nombre_archivo </p>";
    }  else {
        fwrite($archivo, $contenido); // Escribir el contenido en el archivo
        fclose($archivo); // Cerrar el archivo
        echo "<p> Contenido agregado al archivo $nombre_archivo </p>";
    }
}
agregar_al_archivo("archivo.txt", "Este es un nuevo contenido que se agrega al final del archivo.");

// Modo de apertura "r" para leer el contenido del archivo
function leer_archivo($nombre_archivo){
    $archivo = fopen($nombre_archivo, "r"); // Abrir el archivo en modo lectura
    if ($archivo === false) {
        echo "<p> No se pudo abrir el archivo $nombre_archivo </p>";
    }  else {
        $contenido = fread($archivo, filesize($nombre_archivo)); // Leer el contenido del archivo
        fclose($archivo); // Cerrar el archivo
        echo "<p> Contenido del archivo $nombre_archivo: </p>";
        echo "<pre>$contenido</pre>"; // Mostrar el contenido del archivo
    }
}
leer_archivo("archivo.txt");

// Modo de apertura "w" para sobrescribir el contenido del archivo
function sobrescribir_archivo($nombre_archivo, $contenido){
    $archivo = fopen($nombre_archivo, "w"); // Abrir el archivo en modo escritura
    if ($archivo === false) {
        echo "<p> No se pudo abrir el archivo $nombre_archivo </p>";
    }  else {
        fwrite($archivo, $contenido); // Escribir el contenido en el archivo
        fclose($archivo); // Cerrar el archivo
        echo "<p> Contenido sobrescrito en el archivo $nombre_archivo </p>";
    }
}
?>