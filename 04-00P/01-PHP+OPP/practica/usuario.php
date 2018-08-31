<?php

class Usuario 
{
    public $nombre;
    public $email;
    public $contrasenia;

    public function __construct ($nombre, $email, $contrasenia) 
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->contrasenia = $contrasenia;
    }


}

?>