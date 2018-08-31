<?php

require 'usuario.php';
$usuario = new Usuario ('Nelson',  'nelson@gmail.com', 12345678);
$usuario2 = new Usuario ('Mandela', 'mandela@gmail.com', 12345678);
// var_dump($usuario);
// echo "<hr>";
// var_dump($usuario2); 
// echo "<hr>";
echo $usuario->email;
echo saludar ($usuario->nombre);

?>