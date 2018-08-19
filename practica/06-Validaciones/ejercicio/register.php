<?PHP

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contacto</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
<?php 
    $nombre = "";
    $apellido ="";
    $edad = "";
    $nombre = $_POST[nombre];
    $apellido = $_POST[apellido];
    $edad = $_POST[edad];
?>
    <fieldset>
        <legend>Formulario para Validar:</legend>
            <form action="" method="post">
                <label for="nombre">Nombre </label>
                    <input type="text" name="nombre" value="<?=$nombre?>"><br>
                <label for="apellido">Apellido</label>
                    <input type="text" name="apellido"><br>
                <label for="edad">Edad  </label>
                    <input type="text" name="edad"><br>
                <label for="email">Email </label>
                    <input type="email" name="email"><br>
                <label for="contrasenia">Contraseña </label> 
                    <input type="password" name="contrasenia"><br>
                <label for="repetirContrasenia">Repetir contraseña </label> 
                    <input type="password" name="repetirContrasenia"><br>
                <input type="submit" value="Enviar">
            </form>
    </fieldset>
</body>
</html>
