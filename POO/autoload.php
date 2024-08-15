<?php 

$detalles = new Detalles();
$clientes = new CLientes();

function mi_autoload($clase) {
    // De esta manera le indicamos donde van a estar las clases
    require __DIR__ . "/clases/" . $clase;    
} 

// Esta es una manera que tiene php de importar clases sin nosotros tener la necesidad de hacerlo una por una
spl_autoload_register("mi_autoload");
