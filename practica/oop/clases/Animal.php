<?php

class Animal 
{
    public $nombre;
    public $hijos;
    public $hambre;

    public function __construct($nombre) 
    {
        $this->nombre = $nombre;
        $this->hijos = 0;
        $this->hambre = true;
    }

    public function actuarPorInstinto () 
    {
        if ($this->hambre) {
            $this->buscarComida ();
        } elseif (!$this->descendenciaGarantizada()){
            $this->buscarPareja();
        } else {
            $this->dormir();
        }
    }

    public function buscarComida (){

    }

    public function descendenciaGarantizada(){

    }

    public function buscarPareja (){

    }

    public function dormir (){
        echo "Cierro los ojos";
    }

}

?>