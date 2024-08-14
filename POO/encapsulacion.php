<?php

class Producto {
    // Public - Se puede acceder y modificar desde cualquier lugar
    // Protected - Se puede acceder / modificar unicamente en la clase
    // Private - Solo miembros de la misma clase pueden acceder a el

    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function monstrarProducto() : void {
        echo "El producto " . $this->nombre . " tiene un precio de " . $this->precio . ($this->disponible ? " y esta disponible." : " y no esta disponible.");
    }

    // Get se utiliza para indicar que esa funcion va a obtener un valor
    public function getNombre() : string {
        return $this->nombre;
    }

    // Set se utiliza para indicar que esa funcion va a modificar un valor
    public function setNombre($nombre) : void {
        $this->nombre = $nombre;
    }
}


$producto1 = new Producto("Televisor", 200, true);

$producto1->monstrarProducto();

echo "<br>";
echo $producto1->getNombre();
echo "<br>";

$producto1->setNombre("Microondas");
$producto1->monstrarProducto();

