<?php
    session_start();

    require_once 'function.php';
    
    

    spl_autoload_register(function ($class) {
        // include 'classes/' .$class . 'contact.php';
        require_once 'classes/' . strtolower($class) . '.php';
    });
?>