<?php

$frutas=array("Fresa", "Manzana", "Papaya");
print_r ($frutas);
echo "<br/>"."Posicion 0: ".$frutas[0];
//para imprimir el string es necesario hacer un for que recorra el arreglo
echo "<br/>"."Arreglo: ";
for($indice=0;$indice<3;$indice++){
    echo "<br/>".$frutas[$indice];
}


?>