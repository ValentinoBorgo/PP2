<?php

class Persona{
    private $nombre;
    private $edad;

    public function getNombre(){
        return $this->nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function mostrarDatos(){
        echo "El nombre es " .$this->nombre;
        echo "La edad es " .$this->edad;
        echo " ";
    }
}

class Empleado extends Persona{
    private $sueldo;

    public function getSueldo(){
        return $this->sueldo;
    }

    public function setSueldo($sueldo){
        $this->sueldo = $sueldo;
    }

    public function mostrarDatos(){
        parent::mostrarDatos();
        echo "El sueldo es " .$this->sueldo;
    }

}

$per = new Persona();
$per->setNombre("Osvaldo");
$per->setEdad(23);
$Emp = new Empleado();
$Emp->setNombre("Valentino");
$Emp->setEdad(23);
$Emp->setSueldo(340.001);

// echo $per->getNombre(), " " .$per->getEdad();
// echo "<br></br>";
// echo $Emp->getNombre(), " " .$Emp->getEdad(), " " .$Emp->getSueldo();

echo $per->mostrarDatos();
echo "<br></br>";
echo $Emp->mostrarDatos();

?>