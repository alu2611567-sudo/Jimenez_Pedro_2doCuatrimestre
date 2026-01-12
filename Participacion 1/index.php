<?php
    #Ejercicio 1: Crear un programa en php que calcule el area de un rectangulo (base * altura) y el perimetro (2 * (base + altura)). Mostrar los resultados en pantalla.
    $base = 10;
    $altura = 5;
    $area = $base * $altura;
    $perimetro = 2 * ($base + $altura);
    echo "<p> Area del rectangulo: $area <br> Perimetro del rectangulo: $perimetro <br></p>";

    #Ejercicio 2: Crea un programa en php que realice las siguientes conversiones de monedas: De peso a dolar, de dolar a euro, de euro a libra esterlina, y de peso a yen. Mostrar los resultados en pantalla.
    $peso = 1000;
    $dolar = $peso / 20; // Suponiendo 1 dolar = 20 pesos
    $euro = $dolar * 0.85; // Suponiendo 1 dolar = 0.85 euros
    $libra = $euro * 0.9; // Suponiendo 1 euro = 0.9 libras esterlinas
    $yen = $peso * 5; // Suponiendo 1 peso = 5 yenes
    echo "<p> Conversiones de monedas: <br> Peso a Dolar: $dolar <br> Dolar a Euro: $euro <br> Euro a Libra Esterlina: $libra <br> Peso a Yen: $yen <br></p>";

    #Ejercicio 3: crea un programa en php que calcule el IMC (Indice de masa corporal) de una persona. Muestra los resultados en pantalla. El IMC se calcula con la formula: peso (kg) / altura (m)^2.
    $peso_kg = 70;
    $altura_m = 1.75;
    $imc = $peso_kg / ($altura_m ** 2);
    echo "<p> Indice de Masa Corporal (IMC): $imc <br></p>";

    #Ejercicio 4: Crea un programa que convierta una temperatura dada en grados Celsius a Fahrenheit y Kelvin. Muestra los resultados en pantalla. Las formulas son: Fahrenheit = (Celsius * 9/5) + 32 y Kelvin = Celsius + 273.15.
    $celsius = 25;
    $fahrenheit = ($celsius * 9/5) + 32;
    $kelvin = $celsius + 273.15;
    echo "<p> Conversion de temperatura: <br> Celsius a Fahrenheit: $fahrenheit <br> Celsius a Kelvin: $kelvin <br></p>";
?>