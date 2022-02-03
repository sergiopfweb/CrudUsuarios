<?php
    // session_start();
    
    require_once '../includes/init.php';

    $conexion = Conexion::getConnection();

    if(isset($_POST['email']) && !empty($_POST['email'])
        && isset($_POST['password']) && !empty($_POST['password'])){

        $email = Conexion::prep($_POST['email']);
        $password = Conexion::prep($_POST['password']);
        $password = hash('sha512', $password);

        $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
        email='$email' and password='$password'" );

        $row = mysqli_fetch_array($validar_login);

        if( $row['id_rol'] == 1){
            $_SESSION['usuario'] = $email;
            // header("location: ../views/administrator.php");
            //
            echo '
                <script>
                    alert("Bienvenido Administrador!!");
                    window.location = "../views/administrator.php";
                </script>
            ';

        }else if( $row['id_rol'] == 2){
            $_SESSION['usuario'] = $email;
            // header("location: ../views/home.php");
            echo '
                <script>
                    alert("Bienvenido Colaborador!!");
                    window.location = "../views/home.php";
                </script>
            ';
        }else{
            // header("location: ../views/login_registro.php");
            echo '
                <script>
                    alert("Bienvenido Administrador!!");
                    window.location = "../views/login_registro.php";
                </script>
            ';
        }

    }
?>