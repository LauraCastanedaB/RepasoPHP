<?php
//metodos estaticos

class unaClase{

    public static function unMetodo(){
        echo "Hola soy un metodo <br/>";
    }
}

//llamado a traves del metodo normal
$metodo=new unaClase();
$metodo->unMetodo();

//llamado con metodo estatico
//se accede al metodo :: y a la funcion

unaClase::unMetodo();


?>