<?php

// Clase usada en namespaces.php

// Este archivo es para ver que pasa si con el autoload importamos clases con namespaces y sin

class Personaje {
    public function __construct(protected string $nombre, protected string $poder)
    {
        
    }

    public function getInfo() {
        echo $this->nombre . " tiene el poder de " . $this->poder;
    }
}