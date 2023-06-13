<?php

class Cine{
    private $salas = array();

    public function addSala($sala){
        $this->salas[] = $sala;
    }

    public function vender($cantidad, $numSala){
        $this->salas[$numSala]->ocuparButacas($cantidad);
    }

    public function mostrarOcupacion(){
        for($i = 0; $i < 3; $i++){
            echo "<br></br>";
            echo "Numero de sala " . $this->salas[$i]->getNro();
            echo "Ocupación " . $this->salas[$i]->getButacasOcupadas();
            echo "<br></br>";
        }
    }
}

class Sala{
    private int $nro;
    private int $cantidadDeButacas;
    private int $butacasOcupadas;

    function __construct($cantidadDeButacass){
        $this->cantidadDeButacas = $cantidadDeButacass;
        $this->butacasOcupadas = 0;
    }

    public function ocuparButacas($cantidad){
        if($this->butacasOcupadas < $this->cantidadDeButacas){
            $this->butacasOcupadas += $cantidad;
        }else{
            throw new Exception("La sala " . $this->nro ." ya no tiene capacidad");
        }
    }

    public function getButacasOcupadas(){
        return $this->butacasOcupadas;
    }

    public function getCantButacas(){
        return $this->catidadDeButacas;
    }

    public function getNro(){
        return $this->nro;
    }

    public function setNro($s){
        $this->nro = $s;
    }
}

$s1 = new Sala(50);
$s2 = new Sala(30);
$s3 = new Sala(40);
$s1->setNro(1);
$s2->setNro(2);
$s3->setNro(3);

$cine = new Cine();
$cine->addSala($s1);
$cine->addSala($s2);
$cine->addSala($s3);

for($i = 0; $i < 100; $i++){
    try{
        $numSala = rand(0,2);
        $cantidad = rand(1,2);
        $cine->vender($cantidad, $numSala);
    }catch(Exception $e){
        echo "La sala " . $numSala . " ya no tiene capacidad";
    }
}

$cine->mostrarOcupacion();

?>