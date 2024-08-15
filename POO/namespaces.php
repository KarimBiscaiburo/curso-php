<?php 

// Podemos importar de esta manera las clases de otros documentos, pero si tenemos muchas clases es un poco tedioso hacerlo, por lo que tendriamos que usar un autoload

// require "clases/Persona.php";

// Para evitar tener que cuando instanciamos una clase con namespace tengamos que poner siempre "App\Persona", podemos "aclararlo" una sola vez, poniendolo de esta manera. (hay que tener en cuenta que si ya tenemos una clase en el archivo con este nombre, va a dar error (descomentar para verlo))

// use App\Persona;

// Cuando tenemos clases con namespaces debemos hacer algunos cambios para poder requerirlos
function mi_autoload($clase) {
    // explode sirve para separar un string, devolviendo un arreglo con dos posiciones.
    // Como el caracter que tenemos que revisar para separar es "\" y se usa para escapar las comillas, tenemos que agregar otra "\" para indicar que ese es el caracter que tiene que revisar
    $partes = explode("\\", $clase);

    // A su vez, podemos no tener un namespaces en todas las clases que definamos, por lo que cuando las requerimos, tenemos que verificar que realmente tenga o no un namespaces, y asi requerirlas como correspondes

    if ($partes[1]) {
        // Tiene namespaces
        require __DIR__ . "/clases/" . $partes[1] . ".php";
    } else {
        // No tiene namespaces
        require __DIR__ . "/clases/" . $partes[0] . ".php";
    }
}
spl_autoload_register("mi_autoload");

// Hay veces que cuando usamos alguna libreria que incluye algunas clases, se solapan con clases que nosotros tenemos definidas, por lo que tendriamos que cambiar el nombre de nuestras clases para que funcione. Hay una alternativa y es "darle un subnombre"

class Persona {
    public function __construct(public int $edad, public int $documento)
    {
        
    }

    public function getInfo() {
        echo $this->documento . " tiene " . $this->edad;
    }
}

$martin = new App\Persona("Martin", "Garcia");
$jose = new Persona(25, 58764598);
$superman = new Personaje("Superman", "Volar");

echo $martin->getInfo();
echo "<br>";
echo $jose->getInfo();
echo "<br>";
echo $superman->getInfo();

