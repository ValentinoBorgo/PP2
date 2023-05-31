<?php

class Celda{
    private int $nro;
    private String $texto;

    public function getNro(){
        return "Celda nro" . $this->nro;
    }

    public function getTexto(){
        return "Texto celda" . $this->texto;
    }

    public function setNro($nro){
        $this->nro = $nro;
    }

    public function setTexto($texto){
        $this->texto = $texto;
    }
}

class Tabla{
    private $celdas = array();

    public function addCelda($celda){
        $this->celdas[] = $celda;
    }

    public function mostrarCeldas(){
        for($i = 0; $i < 10; $i++){
            echo "<table border = 1px solid>";
            $this->celdas[$i]->setNro($i);
            echo "<td> " . $this->celdas[$i]->getNro();
            $this->celdas[$i]->setTexto($i);
            echo  $this->celdas[$i]->getTexto();
            echo "</td>";
        }
        echo "</table>";
    }

}

$table = new Tabla();

for($o = 0; $o < 10; $o++){
    $cel = new Celda();
    $table->addCelda($cel);
}

echo $table->mostrarCeldas();

?>