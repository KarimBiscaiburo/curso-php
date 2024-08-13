<?php
// De esta manera indicamos que necesitamos tipado fuerte (que ya viene por defecto pero sin esto no nos marcan algunos errores)
declare(strict_types=1);

function sumar (int $numero1 = 0, int $numero2 = 0) {
    echo $numero1 + $numero2;
}

sumar(10, "Hola");
sumar(10, 5.5);