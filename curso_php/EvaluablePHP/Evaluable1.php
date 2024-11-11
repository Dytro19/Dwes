<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pago de Empleado</h1>
    
    <form action="Evaluable1.php" method="post">
        <table cellpadding="5">
            <tr >
                <td><label for="empleado">Empleado</label></td>
                <td><input type="text" name="empleado" value=""><br></td>
            </tr>
            <tr>
                <td><label for="horas">Horas Trabajadas</label></td>
                <td><input type="number" name="horas" value="0"><br></td>
            </tr>
            <tr>
                <td><label for="tarifa">Tarifa por horas</label></td>
                <td><input type="number" name="tarifa" value="0.00"><br></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Procesar</button>
                    <button type="reset">Limpiar</button></td>
            </tr>
            
        </table>
    </form>

    <table cellpadding="5">
        <?php

            //error_reporting(0);//ocultar errores

            $nombre=$_POST["empleado"];
            $horas=$_POST["horas"];
            $tarifa=$_POST["tarifa"];
            $sueldo_bruto=$horas*$tarifa;
            $descuento_salud=$sueldo_bruto*0.12;
            $descuento_afp=$sueldo_bruto*0.1;
            $sueldo_neto=$sueldo_bruto-$descuento_salud-$descuento_afp;

            echo "<tr> <td> Empleado <td> $nombre";
            echo "<tr> <td> Horas Trabajadas <td> $horas";
            echo "<tr> <td> Tarifa Horas <td> $$tarifa";
            echo "<tr> <td> Sueldo Bruto <td> $$sueldo_bruto";
            echo "<tr> <td> Descuento Salud <td> $$descuento_salud";
            echo "<tr> <td> Descuento AFP <td> $$descuento_afp";
            echo "<tr> <td> Sueldo Neto <td> $$sueldo_neto";
            
        ?>
    </table>
    
   

</body>
</html>