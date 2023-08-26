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
<html lang="pt-br">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/styles.css">
        <link rel="stylesheet" href="../assets/styles/exercise.css">
        <title>Curso de PHP</title>
    </head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Curso de PHP</h1>
            <h2>Visualização do exercício</h2>
        </header>

        <nav class="navegacao">
            <span class="user">Usuario : <em><?= $_SESSION['user'] ?></em></span>
            <a class="verde" href=<?="{$_GET['dir']}/{$_GET['file']}.php" ?>>Sem formatação</a>
            <a class="vermelho" href="../pages/index.php">Voltar</a>
        </nav>

        <main class="container">
            <div class="conteudo">
                <?php
                    include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                ?>
            </div>
        </main>

        <footer class="rodape">
            COD3R & ALUNOS © <?php echo date('Y');?>
        </footer>
    </body>
</html>