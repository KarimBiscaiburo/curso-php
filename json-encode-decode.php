<?php 

$productos = [
    [
        "nombre" => "Televisión",
        "cantidad" => 2,
        "activo" => true
    ],
    [
        "nombre" => "Camara",
        "cantidad" => 1,
        "activo" => true
    ],
    [
        "nombre" => "Cama",
        "cantidad" => 0,
        "activo" => false
    ]
];

// Convertir arreglo asociativo a un json

echo "<pre>";
var_dump($productos);

// JSON_UNESCAPED_UNICODE es una constante de php que sirve para que los caracteres especiales no los tome como un codigo
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);

var_dump($json);

$json_array = json_decode($json);

var_dump($json_array);

echo "</pre>";