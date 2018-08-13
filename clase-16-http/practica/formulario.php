<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="imprimir.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="email">E-Mail</label>
        <input type="text" name="email">
        <br>
        <label for="hobby">¿Qué hobbies tenés?</label>
        <input type="checkbox" name="hobby[]" value="futbol"> Futbol
        <input type="checkbox" name="hobby[]" value="voley"> Voley
        <input type="checkbox" name="hobby[]" value="leer"> Leer
        <br>
        <label for="sexo">Seleccione su sexo: </label>
        <input type="radio" name="sexo" value="mujer"> Mujer
        <input type="radio" name="sexo" value="hombre"> Hombre
        <br>
        <label for="seleccion">¿Cómo dormiste anoche?: </label>
        <select name="seleccion">
            <option value="1">1 </option>
            <option value="2">2 </option>
            <option value="3">3 </option>
            <option value="4">4 </option>
            <option value="5">5 </option>
            <option value="6">6 </option>
            <option value="7">7 </option>
            <option value="8">8 </option>
            <option value="9">9 </option>
            <option value="10">10 </option>
        </select>
        <br>
        <input type="submit">
    </form>
</body>
</html>
