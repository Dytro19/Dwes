<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <h1>Biblioteca</h1>

    <?php
    
        $libros=[];
        function anadir($libros, $titulo, $autor, $anoPubli){//Funcion para añadir libros
            $libros[]=[
                "titulo"=>$titulo,
                "autor"=>$autor,
                "año"=>$anoPubli
            ];
            return $libros;
        }
        function listar($libros){//Funcion para mostrar los libros
            if (empty($libros)){
                echo "No hay libros en la biblioteca";
            }
            else{
                foreach ($libros as $libro){
                    echo "Titulo - ".$libro["titulo"]."<br> Autor - ".$libro["autor"]."<br> Año de publicacion - ".$libro["año"]."<br><br>";
                }
            }
        }

        $libros=anadir($libros, "Por las jajas", "Alvaro", 2024);//añadimos libro
        $libros=anadir($libros, "Por las jajas2", "Alvaro2", 2025);
        listar($libros);//mostrar las libros
    
    ?>
</body>
</html>