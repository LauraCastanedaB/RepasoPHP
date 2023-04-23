<?php
//arreglos con indices no numericos 

$frutas=array("f"=>"fresa","m"=>"manzana","p"=>"pera");
print_r($frutas);
echo "<br/>".$frutas["m"]."<br/>";
// para cada elemento del arreglo frutas, almacene los datos en el indice y el valor
foreach($frutas as $indice=>&$valor){
    echo "El valor: ".$valor." Tiene el indice: ".$indice."<br/>";
}

?>