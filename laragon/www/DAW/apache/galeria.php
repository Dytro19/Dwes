<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>Galería</h1>
    <div class="gallery">
        <div class="card">
            <img src="images/telefono.jpg" alt="Teléfono móvil">
            <p>Teléfono móvil de última generación</p>
        </div>
        <div class="card">
            <img src="images/computadora.jpg" alt="Computadora">
            <p>Computadora de alto rendimiento</p>
        </div>
        <div class="card">
            <img src="images/televisor.jpg" alt="Televisor">
            <p>Televisor con pantalla QLED</p>
        </div>
        <div class="card">
            <video controls>
                <source src="https://www.youtube.com/embed/wd7oDCb3gUY?si=4ku_fNUcg3Ml6HDc" type="video/mp4">
                Tu navegador no soporta la reproducción de videos.
            </video>
            <p>Presentación de nuestros productos</p>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
