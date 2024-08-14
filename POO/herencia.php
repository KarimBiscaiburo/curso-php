<?php

class Transporte {
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


class Bicicleta extends Transporte {

}
class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }

    public function getTransmision() : string {
        return $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();
echo "<hr>";

$auto = new Automovil(4, 5, "Manual");
echo $auto->getInfo();
echo "<br>";
echo $auto->getRuedas();
echo "<hr>";