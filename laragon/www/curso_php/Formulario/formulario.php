<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">

        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>

        <br>

        <label for="asignatura">Asignatura</label>
        <select name="asignatura[]" multiple id="asignatura">
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Lenguaje">Lenguaje</option>
            <option value="Ciencia">Ciencia</option>
        </select>

        <br><br>

        <label for="opcion-1">
            <input type="checkbox" value="Manzana" id="opcion-1" name="frutas[]" multiple>
            Manzana
        </label>

        <br><br>

        <label for="opcion-2">
            <input type="checkbox" value="Fresa" id="opcion-2" name="frutas[]" multiple>
            Fresa
        </label>

        <br><br>

        <label for="opcion-2">
            <input type="checkbox" value="Uva" id="opcion-3" name="frutas[]" multiple>
            Uva
        </label>

        <br><br><br>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>