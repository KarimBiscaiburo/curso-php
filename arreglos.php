<?php

$carrito = ["Tablet", "Computadora", "Televisor"];

// Util para ver el contenido de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Añade o cambia un elemento en un indice 
$carrito[3] = "Notebook";

// Añade un elemento al final del arreglo
array_push($carrito, "Mouse");

// Añadir un elemento al inicio del arreglo
array_unshift($carrito, "Nuevo Producto...");

echo "<pre>";
var_dump($carrito);
echo "</pre>";