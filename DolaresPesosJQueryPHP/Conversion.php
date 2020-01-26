<?php

class Conversion{

    private $numero1;


    public function __construct(){
        $this->numero1=0;

    }

    protected function getNumero1(){
        return $this->numero1;
    }
    public function setNumero1($numero1){
        $this->numero1=$numero1;
    }

}



?>