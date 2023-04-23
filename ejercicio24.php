<?php

class persona{ //es la clase a la que puede pertenecer un objeto 
    
    public $nombre; //propiedades que tienen las clases, son caracteristicas de los objetos 
    private $edad;//estas propiedades solo pueden ser afectadas dentro del metodo
    protected $altura;

    //los metodos son funciones que se crean dentro de la clase para darle caracteristicas al objeto,
    // son acciones que se pueden realizar a los objetos  
    public function asignarNombre($nuevoNombre){ 
        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Hello dear ".$this->nombre;
    }
    public function asignarEdad(){
        $this->$edad;
        $this->$edad=20;
        return $this->$edad;
    }
}

$objAlumno=new persona(); //creacion de un objeto llamado objeto Alumno y lo pone en la clase persona
$objAlumno->asignarNombre("Laura"); //entra al objeto y usa uno de los metodos de la clase a la que pertence 
echo $objAlumno->nombre;//entra al objeto e imprime una propiedad que se le habia asignado

$objAlumno2=new persona();
$objAlumno2->asignarNombre("Camila");
echo $objAlumno2->nombre;

$objAlumno3=new persona();
$objAlumno3->asignarNombre("Carlos");
$objAlumno3->imprimirNombre();
echo $objAlumno3->asignarEdad();

?>