<?php

// Clase usada en namespaces.php

namespace App;

class Persona {
    public function __construct(protected string $nombre, protected string $apellido)
    {
        
    }

    public function getInfo() {
        echo $this->nombre . " se apellida " . $this->apellido;
    }
}