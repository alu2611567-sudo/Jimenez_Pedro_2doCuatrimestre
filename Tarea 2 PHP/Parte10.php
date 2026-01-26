Haz un programa que declare un arreglo de nombres y muestre los que empiezan con vocal.
<?php
$nombres = ["Ana", "Carlos", "Elena", "Miguel", "Isabel", "Oscar", "Laura"];
$nombresConVocal = [];
foreach ($nombres as $nombre) {
    if (in_array(strtolower($nombre[0]), ['a', 'e', 'i', 'o', 'u'])) {
        $nombresConVocal[] = $nombre;
    }
}
echo "Nombres que empiezan con vocal: " . implode(", ", $nombresConVocal);
?>