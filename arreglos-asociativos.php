<?php

// En los arreglos asociativos, en vez de acceder por medio de un indice, accedes a los valores por medio de una propiedad (son el equivalente a los objetos en JS)

$cliente = [
    "nombre" => "Karim",
    "edad" => 21,
    "estado" => "Soltero",
    "deportes" => ["Basquet", "Judo", "Natacion"],
    "estudios" => [
        "cursos" => "Udemy",
        "tecnicaturas" => "UTN"
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente["nombre"];
echo "<br>";
echo $cliente["estudios"]["cursos"];
echo "<br>";
echo $cliente["deportes"][0];