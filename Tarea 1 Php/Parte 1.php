Haz un programa que almacene el total de ventas de un día en una variable y muestre un mensaje indicando si fue un buen día de ventas cuando el monto sea mayor o igual a $5,000, o ventas bajas en caso contrario.
<?php
$ventas_dia = 6000; // Puedes cambiar este valor para probar diferentes escenarios
if ($ventas_dia >= 5000) {
    echo "Buen día de ventas.";
} else {
    echo "Ventas bajas.";
}
?>
