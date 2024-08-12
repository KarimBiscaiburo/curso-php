<?php

$nombre = "                  Karim Biscaiburo                     ";

// Nos permite saber la extensión que tiene un string (toma en cuenta los espacios)
echo strlen($nombre);
var_dump($nombre);
echo "<br>";

$nombreCliente = trim($nombre);
echo strlen($nombreCliente);
echo "<br>";

// Convertir a mayusculas
echo strtoupper($nombreCliente);
echo "<br>";

// Convertir a minusculas
echo strtolower($nombreCliente);
echo "<br>";

// Reemplazar texto
echo str_replace("Karim", "K", $nombreCliente);
echo "<br>";

// Revisar si un string existe (devuelve la posicion inicial de donde comienza o nada si no existe)
echo strpos($nombreCliente, "Karim");
echo "<br>";

// Concatenar strings

echo "El cliente " . $nombreCliente . " es Premium";
echo "<br>";

echo "El cliente {$nombreCliente} es Premium";