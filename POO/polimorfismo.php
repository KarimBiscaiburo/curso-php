<?php

// El polimorfismo los objetos pueden tener varias formas y es por ejemplo cuando varias clases heredan metodos de una misma clase o cuando varias clases usan una misma interfaz

interface ITransporte {
    public function getInfo() : string;
    public function getRuedas() :int;
}

class Transporte implements ITransporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "el transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad;
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }

}

class Automovil extends Transporte implements ITransporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
        
    }

    public function getInfo() : string {
        return "el transporte AUTO tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " y tiene el color " . $this->color;
    }

    public function getColor() : string {
        return $this->color;
    }
}

$transporte = new Transporte(8, 20);
$auto = new Automovil(4, 5, "Marron");

echo "<pre>";

var_dump($transporte);
echo "<br>";

var_dump($auto);
echo "<br>";

echo $transporte->getInfo();
echo "<br>";

echo $auto->getInfo();
echo "<br>";

echo $auto->getColor();

echo "</pre>";
