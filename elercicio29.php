<?php
//crear un conexion con la base de datos 

$servidor="localhost";//127.0.0.1
$usuario="root"; //para ingresar al servidor 
$contrasenia="";

try{ 
    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida";

    //visualizar informacion 

    //seleccione todo del album fotos
    $sql="SELECT * FROM `fotos`";
    //entre a la conexion y use el petodo prepare para generar una sentencia donde entre a la base de datos 
    $sentencia=$conexion->prepare($sql);
    //ejecute la sentencia anterior a traves del metodo execute()
    $sentencia->execute();
    //extraiga todo el resultado y pongalo en una variable
    $resultado=$sentencia->fetchAll();

    //imprima (muestra arrays dentro de un array )
    print_r ($resultado);
    echo "<br/>";

    //para recorrer los array se usa for each 
    //para cada registro guardado en resultado pongalo como foto, luego entre a cada foto e imprima solo el nombre 
    foreach($resultado as $foto){
        echo $foto['nombre']."<br/>";
    }


}catch(PDOException $error){// este muestra que error se esta generando
    echo "Conexion erronea".$error;
}


?>