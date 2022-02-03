<?php

    require_once '../includes/init.php';
    

    // crea token
    $token = createToken();
    $_SESSION['token'] = $token;

    // if(isset($_SESSION['usuario'])){
    //     header("location: home.php");
    // }

    $item = new Usuario();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login_registro.css">
    <link rel="stylesheet" href="../css/snackbar.css">
    <script src="../js/function.js"></script>
    <!-- <script scr="../js/validar_login.js"></script> -->
    
    <title>Login Registro</title>
</head>
<body>
    <main>
        <div class="header">
            <!-- <img class="header" src="../imagenes/cabecera.jpg" alt=""> -->
        </div>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Inicia Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!-- Formulario de Login y Registro -->
            <div class="contenedor__login-register">
                <!-- Login -->
                <form method="POST" action="../includes/login_usuario.php" class="formulario__login" id="formulario">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="email" id="email" required>
                    <input type="password" placeholder="Contraseña" name="password"  required>
                    <input type='hidden' name='token' value='<?php echo $token; ?>' />
                    <button type="submit" id="btn-login">Entrar</button>
                    <div id="snackbar"></div>
                </form>

                <!-- Registro -->
                <form method="POST" action="../includes/registro_usuario.php" class="formulario__register" id="formulario2" onsubmit="return validateForm()">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" id="name" name="name" value="<?php 
                        isset($_POST["name"]) ? $_COOKIE["name"] : ''
                    ?>" >
                    <input type="text" placeholder="Correo Electrónico" id="email" name="email" value="<?php 
                        isset($_POST["email"]) ? $_COOKIE["email"] : ''
                    ?>" >
                    <input type="text" placeholder="Usuario" id="usuario" id="usuario" name="usuario" value="<?php 
                        isset($_POST["usuario"]) ? $_COOKIE["usuario"] : ''
                    ?>" >
                    <input type="password" placeholder="Contraseña de mínimo 4 caracteres" id="password" name="password" value="<?php 
                        isset($_POST["password"]) ? $_COOKIE["password"] : ''
                    ?>" required>
                    
                    <input type="hidden" name="id_rol" value="<?php 
                        isset($_POST["id_rol"]) ? $_COOKIE["id_rol"] : ''
                    ?>">

                    <input type='hidden' name='token' value='<?php echo $token; ?>'/>
                    <button>Registrarse</button>
                </form>
                <div id="errors-content">
                    <p class="warnings" id="warnings"></p>
                </div>
            </div>
        </div>
    </main>
    <script src="../js/main.js"></script>
</body>
</html>