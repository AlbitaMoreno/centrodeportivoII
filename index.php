<?php 
    session_start(); 
?>
<html>
<?php
include('head.php');
?>
<body>
    <?php
    include('header.php');
    ?>

    <section class="main">
        <section class="menu">
            <ul>
                <li class="menuitem"><a href="actividades.php">Actividades</a></li>
                <li class="menuitem">Horario</li>
                <li class="menuitem"><a href="tecnicos.php">Técnicos</a></li>
                <li class="menuitem">Instalaciones y Servicios</li>
                <li class="menuitem"><a href="localizacion.php">Localización</a></li>
                <li class="menuitem"><a href="altausuario.php">Alta de usuarios</a></li>
                <li class="menuitem"><a href="foroindice.php">Foro</a></li>
            </ul>
            
        </section>

        <aside class="right">
            <h2>UNIXDEPORT</h2>
            <figure>
                <img src="imagenes/centro_dep.jpg" width="350" height="200" />
                <figcaption id="motivacion">Entrena libre</figcaption>
            </figure>
        </aside>
    </section>

    <?php
    include('footer.html');
    ?>
</body>
</html>