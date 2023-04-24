<?php
class persona{
    public $nombre;
    private $edad;
    protected $altura;

    function __construct($nuevoNombre) {// funcion constructor se llama con doble raya al piso, sirve para asignar los valores desde la creacion del objeto
        $this->nombre=$nuevoNombre;
    }

    

    /* public function asignarNombre($nuevoNombre){
        $this->nombre=$nuevoNombre;
    } */
    public function imprimirNombre(){
        echo "Hola, mi nombre es ".$this->nombre;
    }
    public function asignarEdad(){
        $this->edad=20;
        echo " y mi edad es ".$this->edad;
    }
}
$objPersona=new persona("Laura Marcela");
//$objPersona->asignarNombre("Laura");
$objPersona->imprimirNombre();
$objPersona->asignarEdad();


?>