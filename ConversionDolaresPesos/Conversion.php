<?php

class Conversion{

    private $dolares;

    public function __construct(){
        $this->dolares=0
    }

    protected function getDolares(){
        return $this->dolares;
    }
    public function setDolares($valor){
        $this->dolares=$valor;
    }
}
?>