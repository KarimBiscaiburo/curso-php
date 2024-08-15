<?php

// Las interfaces te permiten agrupar un grupo de declaraciones pero no se implementan. Son como un plano de las funciones/metodos que tienen las clases
// Basicamente nos dice que funciones o metodos tiene, pero no declara como funcionan

interface ITransporte {
    public function getInfo() : string;
    public function getRuedas() :int;
}

// Agregamos la interfaz que queremos usar

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