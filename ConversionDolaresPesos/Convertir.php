<?php
require_once "Conversion.php";
class Convertion extends Conversion{
    public function convertir(){
        $pesos = 3365;
        return($this->getDolares()*$pesos); 
    }
}
?>