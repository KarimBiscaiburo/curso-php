<?php

class Producto {
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function monstrarProducto() {
        echo "El producto " . $this->nombre . " tiene un precio de " . $this->precio . ($this->disponible ? " y esta disponible." : " y no esta disponible.");
    }
}

// Si necesitamos mostrar un producto pero no queremos tener que hacerlo manualmente con cada uno que instanciemos, podemos definir un metodo dentro de la clase que nos permita realizarlo, independientemente de cuantas instancias de ese objeto declaremos 

$producto1 = new Producto("Televisor", 200, true);
$producto2 = new Producto("Cama", 100, true);
$producto3 = new Producto("Celular", 300, false);

$producto1->monstrarProducto();
echo "<br>";
$producto2->monstrarProducto();
echo "<br>";
$producto3->monstrarProducto();