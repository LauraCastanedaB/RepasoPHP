<?php

class persona{
    public $nombre;
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Hola, mi nombre es ".$this->nombre;
    }

}

class trabajador extends persona{ // herencia, significa que esta clase puede tener las mismas pripiedades que tiene la clase anterior, simplemente
                                    // se le agregan nuevos metodos
    public $puesto;

    public function asignarPuesto($nuevoPuesto){
        $this->puesto=$nuevoPuesto;
    }
    public function imprimirPuesto(){
        echo "<br/>"."Hola mi nombre es ".$this->nombre." y mi puesto es ".$this->puesto;
    }
}
$objPersona=new persona();
$objPersona->asignarNombre("Camila");
$objPersona->imprimirNombre();

$objTrabajador=new trabajador();
$objTrabajador->asignarNombre("Laura");
$objTrabajador-> asignarPuesto("Ingeniera Electronica");
$objTrabajador->imprimirPuesto();

?>