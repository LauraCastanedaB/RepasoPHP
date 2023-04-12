<?php
//funcion, necesita dos argumentos, el segundo se pone vacio por defecto para que no haya errores;
function imprimirNombre($nombre, $apellido=" "){
    echo "Hola ".$nombre." ".$apellido."<br/>";
}
imprimirNombre("Laura", "Castaneda");
imprimirNombre("German");
imprimirNombre("Flor", "Bustos");

?>