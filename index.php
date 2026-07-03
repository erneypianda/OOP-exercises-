<?php
require_once("libro.php");

$libros = [
    new libro("Don Quijote", "Miguel de Cervantes", 1605),
    new libro("Cien años de soledad", "Gabriel Garcia Marquez", 1967)
];

echo "<h2>Información inicial</h2>";

foreach ($libros as $carlos) {
    $carlos->mostrarInfo();
}

echo "<h2>Pruebas con libro 1</h2>";
$libros[0]->prestar();
$libros[0]->prestar();
$libros[0]->devolver();
?>