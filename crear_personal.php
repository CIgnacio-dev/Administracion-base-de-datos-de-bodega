<?php
    include('sesion.php');


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Crear personal</title>
        <link rel="stylesheet" href="estilo.css"/>
    </head>
    <body>

        <div class="contenedor">
            <?php
                error_reporting(E_ALL  ^  E_NOTICE  ^  E_WARNING);
            ?>
            <div class= "encabezado">
                <div class="izq">
                    <p>Bienvenido/a:<br><?php echo $_SESSION["usuario"] ?></p></p>
                </div>

                <div class="centro">
                    <a href=principalAdmin.php><center><img src='imagenes/home.png'><br>Home<center></a> 
                </div>
                
                <div class="derecha">
                    <a href="salir.php?sal=si"><img src="imagenes/cerrar.png"><br>Salir</a>
                </div>
            </div>

            <br><h1 align="center">GESTIÓN DE PERSONAL</h1>

            <div class="formulario">
                <form ="registro" method="post" action="registro_personal.php" enctype="application/x-www-form-urlencoded">
                    <div class="campo">
                        <label for="cabra">RUT:</label>
                        <input type="text" name="rut" required/>
                    </div>

                    <div class="campo">
                        <div class="en-linea izquierdo">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" required/>
                        </div>

                        <div class="en-linea">
                            <label for="apellido">Apellido:</label>
                            <input type="text" name="apellido" required/>
                        </div>
                    </div>

                    <div class="campo">
                        <label for="cargo">Cargo:</label>
                            <select name="cargo" required/>
                                <option>Admin</option>
                                <option>Bodega</option>
                            </select>
                    </div>

                    <div class="campo">
                        <div class="en-linea izquierdo">
                            <label for="contrasena1">Contraseña:</label>
                            <input type="password" name="contrasena1" required/>
                        </div>
                        
                        <div class="en-linea">
                            <label for="contrasena2">Repetir contraseña:</label>
                            <input type="password" name="contrasena2" required/>
                        </div>
                    </div>

                    <div class="botones">
                        <input type="submit" name="boton-enviar" value="crear usuario"/>

                        <?php

                            if($_GET["erronea"]=="si"){
                                echo"El rut de la persona ya existe";

                            }else if($_GET["valida"]=="si"){
                                echo "Datos ingresados correctamente";
                            }else if($_GET["distintas"]="si"){
                                echo "Las contraseñas deben coincidir";
                            }

                            ?>
                    </div>
                </form>
            </div>

        </div>
    </body>
</html>