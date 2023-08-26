<?php
    session_start();

    ini_set('display_errors', 0);

    if($_COOKIE['user'])
    {
        $_SESSION['user'] = $_COOKIE['user'];
    }

    if(!$_SESSION['user'])
    {
        header('Location: login/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/styles.css">
        <title>Curso de PHP</title>
    </head>
    <body>
        <?php require_once('../components/menu.php'); ?>

        <nav class="navegacao">
            <span class="user">Usuario : <em><?= $_SESSION['user'] ?></em></span>
            <a class="vermelho" href="login/logout.php">Sair</a>
        </nav>
        
        <main class="container">
            <?php require_once('../components/navigation.php'); ?>
        </main>
        
        <?php require_once('../components/footer.php'); ?>
    </body>
</html>