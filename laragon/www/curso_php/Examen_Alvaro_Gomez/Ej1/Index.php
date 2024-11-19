<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="datos.php" method="post">
        <label for="">Nombre </label><input type="text" id="nombre" name="nombre">
        <br>
        <label for="">Apellidos</label><input type="text" id="apellido" name="apellido">
        <br>
        <label for="">Deportes preferidos</label>
        <select name="deportes[]" multiple id="deportes">
            <option value="Futbol">Futbol</option>
            <option value="Baloncesto">Baloncesto</option>
            <option value="Hokey">Hokey</option>
            <option value="Tenis">Tenis</option>
        </select>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>