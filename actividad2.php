<?php
session_start();
?>

<!DOCTYPE html>

<html lang="es">
<?php include 'head.php'; ?>
</head>
<body>
   <?php include 'header.php'; ?>

    <section class="main">
        <section class="right">
            <center>
                <h2>AquaFitness</h2>
                <img class="imgActividades" src="imagenes/aquafitness.jpg" width="100%" />
                <p>
                    Actividad cardiovascular muy divertida donde te moverás al ritmo de la música con un mayor componente coreográfico.
                    <br />
                    <img class="imgActividades" src="imagenes/aqua_fitness.png" width="100%" />
                </p>
            </center>
        </section>
        <nav class="menu">
            <center>
                <h2>Actividades</h2>
            </center>
            <ul>
                <li class="menuitem2">
                    <img class="imgActividades" src="imagenes/aerodance.jpeg" width="40%" height="50%" />
                    <a href="actividad1.html">AeroDance</a>
                    <a href="actividad1.html"><input type="submit" value="+Info" /></a>
                </li>
                <li class="menuitem2">
                    <img class="imgActividades" src="imagenes/aquafitness.jpg" width="40%" height="50%" />
                    <a href="actividad2.html">AquaFitness</a>
                    <a href="actividad2.html"><input type="submit" value="+Info" /></a>
                </li>

                <li class="menuitem2">
                    <img class="imgActividades" src="imagenes/bodycombat.jpeg" width="40%" height="50%" />
                    <a href="actividad2.html">BodyCombat</a>
                    <a href="actividad2.html"><input type="submit" value="+Info" /></a>
                </li>
                <li class="menuitem2">
                    <img class="imgActividades" src="imagenes/core.jpeg" width="40%" height="50%" />
                    <a href="actividad1.html">Core</a>
                    <a href="actividad1.html"><input type="submit" value="+Info" /></a>
                </li>
                <li class="menuitem2">
                    <img class="imgActividades" src="imagenes/hiit.jpeg" width="40%" height="50%" />
                    <a href="actividad2.html">HIIT</a>
                    <a href="actividad2.html"><input type="submit" value="+Info" /></a>
                </li>
                <li class="menuitem2">
                    <img class="imgActividades" src="imagenes/pilates.jpeg" width="40%" height="50%" />
                    <a href="actividad1.html">Pilates</a>
                    <a href="actividad1.html"><input type="submit" value="+Info" /></a>
                </li>
                <li class="menuitem2">
                    <img class="imgActividades" src="imagenes/spinning.jpg" width="40%" height="50%" />
                    <a href="actividad1.html">Spinning</a>
                    <a href="actividad1.html"><input type="submit" value="+Info" /></a>
                </li>
                <li class="menuitem2">
                    <img class="imgActividades" src="imagenes/yoga.jpeg" width="40%" height="50%" />
                    <a href="actividad2.html">Yoga</a>
                    <a href="actividad2.html"><input type="submit" value="+Info" /></a>

                </li>

            </ul>

        </nav>
    </section>
    <?php include 'footer.html'; ?>
</body>
</html>