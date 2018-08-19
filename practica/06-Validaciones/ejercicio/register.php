<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contacto</title>
    <link rel="stylesheet" href="css/master.css">
    <?php include_once("validacion.php");?>
</head>
<body>
<?php 
    $errores = [];
    $nombre = "";
    $apellido ="";
    $edad = "";
    $email = "";

    if ($_POST) {
        $nombre = $_POST[nombre];
        $apellido = $_POST[apellido];
        $edad = $_POST[edad];
        $email = $_POST[email];
        $errores = validarErrores ($_POST);
        
        echo "<hr>";
        var_dump($errores);
        echo "<hr>";
       
    }
    
?>
    <fieldset>
        <legend>Formulario para Validar:</legend>
            <form action="" method="post">
                <label for="nombre">Nombre </label>
                    <input type="text" name="nombre" value="<?php if (!is_numeric(perseverancia(nombre))){echo perseverancia(nombre);}?>"><br>
                <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" value="<?= perseverancia(apellido)?>"><br>
                <label for="edad">Edad  </label>
                    <input type="text" name="edad" value="<?= perseverancia(edad)?>"><br>
                <label for="email">Email </label>
                    <input type="email" name="email" value="<?= perseverancia(email)?>"><br>
                <label for="contrasenia">Contraseña </label> 
                    <input type="password" name="contrasenia"><br>
                <label for="repetirContrasenia">Repetir contraseña </label> 
                    <input type="password" name="repetirContrasenia"><br>
                <input type="submit" value="Enviar">
            </form>
    </fieldset>
</body>
</html>
