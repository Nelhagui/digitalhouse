<?php
function valor($var1) {
    if (isset($_POST["$var1"])) {
        return $_POST["$var1"];
    }
}
$nombreIngresado = "";

if ($_POST) {?>
    <p>Muchas gracias por registrarte <?=$_POST["nombre"] . " " .$_POST["apellido"]?>, nos has dicho que tienes <?=$_POST["edad"]?> años.</p>
    <p>Hemos registrado tu email, <?=$_POST["mail"]?>. ¡Gracias!</p>
<?php }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
    </head>
    <body>
        <form class="formulario" action="registro_usuarios.php" method="post">


            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" value="<?php echo $nombreIngresado ?>">



                
            <br>
            <label for="apellido">Apellido: </label>
            <input type="text" name="apellido" id="apellido" value="<?=valor("apellido")?>" required>
            <br>
            <label for="edad">Edad: </label>
            <input type="text" name="edad" id="edad" value="<?=valor("edad")?>" required>
            <br>
            <label for="mail">E-Mail: </label>
            <input type="email" name="mail" id="mail" value="<?=valor("mail")?>" required>
            <br>
            <label for="passwd">Contraseña: </label>
            <input type="password" name="passwd" id="passwd" required>
            <br>
            <label for="cpasswd">Repetir Contraseña: </label>
            <input type="password" name="cpasswd" id="cpasswd" required>
            <br>
            <input type="checkbox" name="confirm" value="1" id="confirm" required>
            <label for="confirm">Confirmo que los datos son correctos</label>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
