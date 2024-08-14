<?php

class Producto {

    public $imagen;
    public static $imagenPlaceholder = "imagen.jpg";

    // Si le indicamos "public", "protected" o "private" es obligatorio que le pasemos por parametros un valor para que lo defina
    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if ($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
    }

    // Para obtener datos de una variable estatica se utiliza self en vez de this
    public static function obtenerImagen() {
        return self::$imagenPlaceholder;
    }

    public static function obtenerProducto() {
        echo "Obteniendo datos del producto...";
    }

    public function monstrarProducto() : void {
        echo "El producto " . $this->nombre . " tiene un precio de " . $this->precio . ($this->disponible ? " y esta disponible." : " y no esta disponible.");
    }

    public function getNombre() : string {
        return $this->nombre;
    }

    public function setNombre($nombre) : void {
        $this->nombre = $nombre;
    }
}


$producto1 = new Producto("Televisor", 200, true, "");
echo $producto1->obtenerImagen();
echo "<br>";

$producto2 = new Producto("Computadora", 300, true, "curvo.png");
echo $producto2->obtenerImagen();
echo "<br>";


// Los metodos estaticos no necesitan tener una instancia (dependiendo lo que haga), por lo que podemos acceder al mismo sin necesidad de tener una instancia de Producto
echo Producto::obtenerProducto();

