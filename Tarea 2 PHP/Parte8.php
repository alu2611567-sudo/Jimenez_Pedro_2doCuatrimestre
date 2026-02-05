Haz un programa que declare una frase y reemplace una palabra por otra.
<?php
    $frase = "El gato está en el tejado.";
    $frase_modificada = str_replace("gato", "perro", $frase);
    echo $frase_modificada;
?>