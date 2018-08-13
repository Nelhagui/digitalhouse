<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    //funcion para debug!
    function dd($var){
        echo "<pre>";
        die(var_dump($var));
        echo "</pre>";
    }