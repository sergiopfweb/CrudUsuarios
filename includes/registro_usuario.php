<?php 
    require_once 'init.php'; 

    if (
        !isset($_POST['token'])
        || !isset($_SESSION['token'])
        || empty($_POST['token'])
        || $_POST['token'] !== $_SESSION['token']
    ) {
        die('token incorrecto');
    } else {
        setcookie("name", filter_var($_POST["name"], FILTER_SANITIZE_STRING), time() + (60 * 60 * 24));
        setcookie("password", filter_var($_POST["password"], FILTER_SANITIZE_STRING), time() + (60 * 60 * 24));
        unset($_SESSION['token']);
    }
?>
<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    //Encriptar Contraseña
    $password = hash('sha512', $password);
    $id_rol = $_POST['id_rol'];
    $id_rol = 2;

    $data = [
        'name' => $name,
        'email' => $email,
        'usuario' => $usuario,
        'password' => $password,
        'id_rol' => $id_rol
    ];

    $addRegister = new Usuario($data);

    $result = $addRegister->addRecord();

    echo $result['content'];
