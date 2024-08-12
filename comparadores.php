<?php

$numero1 = 10;
$numero2 = 20;
$numero3 = 20;
$numero4 = "20";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero2 >= $numero3);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero2 == $numero3);
echo "<br>";

var_dump($numero2 == $numero4);
echo "<br>";

var_dump($numero2 === $numero4);
echo "<br>";

var_dump($numero2 != $numero4);
echo "<br>";

var_dump($numero2 !== $numero4);
echo "<br>";

// Devuelve -1 si el de la izquierda es menor, 0 si es igual o 1 si el de la izquierda es mayor
var_dump($numero1 <=> $numero2);
echo "<br>";