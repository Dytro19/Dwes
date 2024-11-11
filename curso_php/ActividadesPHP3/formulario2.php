<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras</title>
</head>
<body>
    <form action="index2.php" method="post">
        <label for="figuras">
            Escoje 1 figura:
        </label><br>
        <input type="radio" name="figura" id="Circulo" value="Circulo" checked>Circulo<br>
        <input type="radio" name="figura" id="Triangulo" value="Triangulo">Triangulo<br>
        <input type="radio" name="figura" id="Cuadrado" value="Cuadrado">Cuadrado<br>
        <br><br>
        Radio: <br><input type="number" name="radio" id="radio"><br>
        Altura: <br><input type="number" name="altura" id="altura"><br>
        Base: <br><input type="number" name="base" id="base"><br>
        Lado: <br><input type="number" name="lado" id="lado"><br>

        <button type="submit">Calcular</button>
    </form>
</body>
</html>