<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="">
    <title>login</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../applicacion/css/style-login.css">
    <style>
        .acui{
            text-align: center;
            font-size: 60px;
            padding-top: 10px 
        }
    </style>
</head>

<body>
    <div class="titulo">
        <h1 class="acui">AcuOximetro</h1>
    </div>
    
    <main>
        <div class="contenedor__principal">
            <div class="caja__trasera">
                <div class="caja__trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn__iniciar-sesion">Iniciar sesion</button>
                </div>
                <div class="caja__trasera_register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">registrarse</button>
                </div>
            </div>
            <!--formulario de login y registro-->
            <div class="contenedor__login-register">
                <!--login-->
                <form action="php/login_usuario_be.php" method="post"  class="formulario__login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Correo electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>

                </form>
                <!--registro-->
                <form action="../applicacion/php/registro_usuario_be.php" method="post" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="../applicacion/js/login.js"></script>
</body>

</html>