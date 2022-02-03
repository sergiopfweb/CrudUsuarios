<?php 
    include_once 'init.php';
?>
<?php
    if (
        !isset($_POST['token'])
        || !isset($_SESSION['token'])
        || empty($_POST['token'])
        || $_POST['token'] !== $_SESSION['token']
    ) {
        die('token incorrecto');
    }
    

    foreach ($_POST as $key => $value) {
        $_POST[$key] = filter_var($_POST[$key], FILTER_SANITIZE_STRING);
    }

    switch ($_POST['task']) {
        case 'update':
            updateUser($_POST);
            break;
        case 'delete':
            deleteUser($_POST['id']);
            break;
    }

    function deleteUser($userId){
        try {
            $response = Usuario::deleteUserID($userId);
            echo $response;
        } catch (Exception $error) {
            http_response_code(500);
            echo 'Excepción: ',  $error->getMessage(), "\n";
        }
    }

    function updateUser($params){
        try {
            $user = new Usuario($params);
            $response = $user->updateUser();
            echo $response;
        } catch (Exception $error) {
            http_response_code(500);
            echo 'Excepción: ',  $error->getMessage(), "\n";
        }
    }
?>