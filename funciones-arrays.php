<?php

$clientes = ["Martin", "Gaston"];

// Buscar elementos en un arreglo
var_dump( in_array("Martin", $clientes) );


// Ordenar elementos de un arreglo
$numeros = [1,2,5,3,4];
sort($numeros); // De menor a mayor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

rsort($numeros); // De mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglos asociativos
$cliente = [
    "saldo" => 100,
    "nombre" => "Martin",
    "apellido" => "Garcia"
];

asort($cliente); // ordena arreglos asociativos por valores, primero los numeros y despues los strings alfabeticamente (si hay boolean no funciona)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

arsort($cliente); // Lo mismo pero al revez

echo "<pre>";
var_dump($cliente);
echo "</pre>";

ksort($cliente); // Ordena por llaves alfabeticamente

echo "<pre>";
var_dump($cliente);
echo "</pre>";

krsort($cliente); // Ordena por llaves alfabeticamente pero al revez

echo "<pre>";
var_dump($cliente);
echo "</pre>";