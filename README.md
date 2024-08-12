# Notas Curso de PHP

## Como correr en la web un documento php

* Si tenemos instalado apache, dentro de los archivos del mismo vamos a encontrar una carpeta llamada "htdocs", en la que si agregamos ahi las carpetas o con los archivos php, vamos a poder mostrarlos agregando a la url el nombre de la carpeta, es decir, "localhost:{nombreCarpeta}"

* Otra manera es correrlos desde la terminal del editor de codigo, indicandole al servicio de apache, el puerto donde queremos que corra el proyecto, de la siguiente manera: 

Nos ubicamos en la carpeta raiz de donde estan nuestros archivos .php, ingresamos el siguiente comando "php -S localhost:{puerto}" y luego para poder mostrar los archivos debemos agregar a la url el nombre del archivo que queremos mostrar. Ej: "localhost:3000/index.php"