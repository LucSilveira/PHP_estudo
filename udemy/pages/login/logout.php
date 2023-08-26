<?php
    session_start();

    session_destroy();

    // Apagando os dados do cookie
    unset($_COOKIE['user']);
    setcookie('user', '');

    header('Location: login.php');
?>