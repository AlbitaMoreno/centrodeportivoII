<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<?php
include('head.php');
?>
<body>
 <?php
 include('header.php');
 ?>
 <section class="main">
    <aside class="ultimasNoticias">
        <h2>Últimas Noticias</h2>
        <p>
            <strong>Resumen</strong>
            Practica más de 30 modalidades de actividades dirigidas para que tu entrenamiento sea efectivo y divertido. Descubre los beneficios de un entrenamiento regular y disfruta de una experiencia única. Además, puedes practicarlas dentro de tu horario contratado sin coste adicional, porque están incluidas en tu cuota.
            <br />
            <br />
            <strong>Consejo del dia:</strong> El baile como actividad deportiva es el mejor anti estrés, ya que contribuye a la mejora del estado físico. Su práctica nos permite mover los músculos y articulaciones aportando elsticidad. Aumenta la fuerza muscular y de los huesos, disminuyendo el riesgo de padecer de osteoporosis.
            <br />
            <br />
            <strong>HIIT</strong>: Entrenamiento global del cuerpo a nivel cardiovascular/muscular con o sin material, con la utilicacion de diferentes metodologias de alta intensidad.
            <br />

        </p>
    </aside>
    <nav class="menuActividades">
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

<?php
    include('footer.html');
?>
</body>
</html>