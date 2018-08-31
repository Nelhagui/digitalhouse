<?php

spl_autoload_register (function ($nombreClase){
    include "clases/$nombreClase.php";
});

$perro = new Animal('carlos');
echo "<hr>";
var_dump ($perro);


?>