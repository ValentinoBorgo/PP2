<?php

class Empleado{
    
    private $nombre;
    private $sueldo;

    function __construct($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function pagaImpuesto(){
        if($this-> sueldo > 3000){
            echo "El nombre de la persona es   $this->nombre y debe pagar impuestos";
        }else{
            echo "El nombre de la persona es   $this->nombre y no debe pagar impuesto";
        }
    }
}

$per1 = new Empleado("Valentino", 2000);


echo $per1->pagaImpuesto(); 

?>