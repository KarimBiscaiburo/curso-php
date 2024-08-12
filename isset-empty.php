<?php

$clientes1 = [];
$clientes2 = array();
$clientes3 = array("Pedro", "Carlos", "Martin");
$cliente = [
    "nombre" => "Karim"
];

// Empty - Revisa si un arreglo esta vacio
var_dump( empty($clientes1) );
var_dump( empty($clientes2) );
var_dump( empty($clientes3) );
echo "<br>";
// Isset - Revisa si un arreglo esta creado o una propiedad esta definida

var_dump( isset($clientes4) );
var_dump( isset($cliente["nombre"]) );
var_dump( isset($cliente3[20]) );