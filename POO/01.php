<?php
declare( strict_types = 1 );
// Podemos crear una clase o instanciarla de esta manera, sin un constructor

class Producto {
    public $nombre;
    public $precio;
    public $disponible;
}

$producto = new Producto();
$producto->nombre = "Tablet";
$producto->precio = 200;
$producto->disponible = true;

echo "<pre>";
var_dump($producto);
echo "</pre>";

// Para no tener que ir linea por linea definiendo los valores de cada atributo, tenemos que definir un constructor

class Animal {
    public $nombre;
    public $tipo;
    public $color;

    // Para hacer uso de los tipos necesitamos indicar un tipado fuerte con declare en la primera linea
    public function __construct(string $nombre, string $tipo, string $color)
    {
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->color = $color;
    }
}

$mascota = new Animal("Pochoclito", "Perro", "Marron");

echo "<pre>";
var_dump($mascota);
echo "</pre>";

// --------------------- ESTA ES UNA MANERA ANTIGUA DE HACERLO --------------------- //

// --------------------- ESTA ES UNA MANERA MAS ACTUAL DE HACERLO (salio con PHP 8) --------------------- //

class Casa {
    // No hace falta indicar los atributos que va a tener, ni instanciarlos
    public function __construct(public string $tamaño, public int $precio, public bool $disponible)
    {
    }
}

$casa = new Casa("Mediano", 200000, true);

echo "<pre>";
var_dump($casa);
echo "</pre>";
