<header id="header">
    <section class="logo">
        <a href="index.php"> <img src="imagenes/logo.png" width="35%"/></a>

    </section>
    <section style="display: inline-block;">
        <h1>UNIXDEPORT</h1>
    </section>


    <section class="loggin">
        <!--estado del loggin -->
        <?php
        if(isset($_SESSION['loggedin'])){
            echo 'Bienvenido: '.$_SESSION['username'];

            echo '
            <form action="logout.php" method="post">
            <input type="submit" value="Cerrar Sesión" name = "Cerrar" id = "Cerrar"/>
            </form>';

            echo '
            <form action="modify.php" method="post">
            <input type="submit" value="Mis Datos" name = "Datos" id = "Datos"/>
            </form>';
        }
        else{
            echo '<form class="loggin" action="login.php" method = "post">            
            <label for="DNI">DNI</label>
            <br />
            <input type="text" name="DNI" id = "DNI"/>
            <br />
            <label for="pass">Contraseña</label>
            <br />
            <input type="password" name="pass" id="pass"/>
            <br />
            <input type="submit" value="Send" name = "Send" id = "Send"/>
            </form> ';
        }
        ?>
        
    </section>
</header>