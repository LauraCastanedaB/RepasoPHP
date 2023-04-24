<?php
//crear un conexion con la base de datos 

$servidor="localhost";//127.0.0.1
$usuario="root"; //para ingresar al servidor 
$contrasenia="";

try{ //condicional de errores
    //Para establecer conexion, se inicia creando una nueva instancia 
    //es como si creara un objeto en esa classe PDO (libreria que viene con xampp) que permite conectar a la base de datos 
    //y se le dan parametros de: clase de base de datos "mysql" la cual esta ubicada 
    //en el host "localhost" que lo decaramos con la variable servidor y el nombre de la base
    //los datos de ingreso como usuario y contraseña
    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    
    //aca se ingresa a un metodo de esa clase que se llama setAttribute 
    //en este tiene parametros de acceso a errores a traves de funciones estaticas
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida";

    //insertar informacion en la base de datos 
    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg')";
    $conexion->exec($sql);

}catch(PDOException $error){// este muestra que error se esta generando
    echo "Conexion erronea".$error;
}


?>