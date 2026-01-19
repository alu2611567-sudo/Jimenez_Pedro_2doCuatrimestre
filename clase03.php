<?php
 //clase 03

 $num1 = 28;
 $num2 = 15;
 // condicionales

 // condicional if simple
 if($num1 > $num2){
    echo "$num1 es mayor que $num2<br>";
 }

 // Condicional if - else
 if($num1 < $num2){
    echo "$num1 es menor que $num2<br>";
 }
 elseif {
    echo "$num1 es igual a $num2"
    }

 // Condicional switch
 $dia = 3
 switch ($dia){
    case 1:
        echo "lunes";
        break;
    case 2:
        echo "martes";
        break;
    case 3:
        echo "miércoles";
        break;
    case 4:
        echo "jueves";
        break;
    case 5:
        echo "viernes";
        break;
    case 6:
        echo "sabado";
        break;
    case 7:
        echo "domingo";
        break;
    default:
        echo "Dia no valido";
 }










 // Bucles
 // Bucle while (Mientras)
 $contador = 0;
 while($contador < 10){
    echo "contador (while): $contador<br>";
    $contador++;
 }

 // Bucle do - while
 $contador2 = 0;
 do{
    echo "contador (do - while): $contador2<br>";
    $contador++;
 } while($contador2 <10);

 // Bucle foreach










   // Array indexado
   $numeros = array(10, 20, 30, 40, 50, 60, 70); //Indices: 0, 1, 2, 3, 4, 5, 6
   foreach($numeros as $numero){
        echo "Número: $numero<br>";
   }

   // Array asociativo
   $persona = array(
    "Nombre" => "Juan",
    "Edad" => 30,
    "Ciudad" => "Madrid",
    "Profesion" => "Abogado"
   )

 foreach($persona as $clave => $valor){
    echo "$clave: $valor<br>";
 }

   //Array multidimensional
    