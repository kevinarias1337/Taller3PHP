<?php
require_once "Conversion.php";
class Dolares extends Conversion{
    public function dolar(){
        return($this->getNumero1()*3365);
    }
}

?>