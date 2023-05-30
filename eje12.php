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
    private [] celdas;

    public function addCelda($celda){
        $this->celdas[] = $celda;
    }

    public function mostrarCeldas(){
        echo "<table>";
        for($i = 0; $i < 9; $i++){
            $celda = $this->celdas[$i]->setNro($i);
            echo "<td> " . $celda->getNro();
            for($a = 0; $a < 9 ; $a++){
                $texto = $this->celdas[$a]->setTexto($a);
                echo . $texto->getTexto();
            }
            echo "</td>";
        }
    }

}

$table;

for($o = 0 ; o < 9; o++){
    $cel = new Celda();
    $table->addCelda($cel);
}

echo $table->mostrarCeldas();

?>