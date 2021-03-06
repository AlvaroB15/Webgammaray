<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Gamma Ray</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>

<body>
    <header>
        <img id="logoGammaRay" src="../logo_Gamma_Ray.gif" alt="Logo de Gamma Ray" width="200" height="75">

        <nav>
            <ul>
                <li id="listaMenu"><a href="../index.php">Home</a></li>
                <!-- incluira la historia con pocas imagenes -->
                <li id="listaMenu"><a href="galeria.php">Galeria</a></li>
                <li id="listaMenu"><a href="conciertos.php">Conciertos</a></li>
                <li id="listaMenu"><a href="discografia.php">Discografia</a></li>
                <li id="listaMenu"><a href="letrasCanciones.php">Letra de Canciones</a></li>
                <li id="listaMenu"><a href="apoyo.php">Apoya al Grupo</a></li>
            </ul>
        </nav>

    </header>

    <article>

        <div class="galeria" style="--w: 760px; --h: 500px;">
            <input type="radio" name="navegacion" id="_1" checked>
            <input type="radio" name="navegacion" id="_2">
            <input type="radio" name="navegacion" id="_3">
            <input type="radio" name="navegacion" id="_4">
            <input type="radio" name="navegacion" id="_5">
            <input type="radio" name="navegacion" id="_6">

            <!-- <figure>
                <img src="../Imagenes/galeria1.jpg" width="760" height="500" alt="Galeria CSS 1" />
                <figcaption>Gamma Ray 1</figcaption>
            </figure> -->

            <img src="../Imagenes/galeria1.jpg" width="760" height="500" alt="Galeria CSS 1" />
            <img src="../Imagenes/galeria2.jpg" width="760" height="500" alt="Galeria CSS 2" />
            <img src="../Imagenes/galeria3.jpg" width="760" height="500" alt="Galeria CSS 3" />
            <img src="../Imagenes/galeria4.jpg" width="760" height="500" alt="Galeria CSS 4" />
            <img src="../Imagenes/galeria5.jpg" width="760" height="500" alt="Galeria CSS 5" />
            <img src="../Imagenes/galeria6.jpg" width="760" height="500" alt="Galeria CSS 6" />
        </div>

    </article>

    <div class="espacioFinal"></div>

</body>

</html>