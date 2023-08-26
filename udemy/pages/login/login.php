<?php 
    session_start();

    ini_set('display_errors', 0);

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($_POST['email'])
    {
        $usuariosData = [
            [ 
                "nome" => "Aluno Cod3r",
                "email" => "aluno@cod3r.com.br",
                "senha" => "coder123"
            ], [
                "nome" => "Aluno Senai",
                "email" => "senai@email.com",
                "senha" => "senai123"
            ], [
                "nome" => "Lucao",
                "email" => "lucas@email.com",
                "senha" => "lucas123"
            ]
        ];

        foreach($usuariosData as $usuario)
        {
            $emailValido = $email === $usuario['email'];
            $senhaValida = $senha === $usuario['senha'];

            if($emailValido && $senhaValida)
            {
                $_SESSION['errors'] = null;
                $_SESSION['user'] = $usuario['nome'];

                // Salvando dados no cookie
                $expiracaoDados = time() + 60 * 60 * 24* 30;
                setcookie('user', $usuario['nome'], $expiracaoDados);

                header('Location: ../index.php');
            }
        }

        if(!$_SESSION['user'])
        {
            $_SESSION['errors'] = ['Usuario ou senha inválidos!'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../assets/css/styles.css">
        <link rel="stylesheet" href="../../assets/styles/login.css">
        <title>Curso de PHP</title>
    </head>
    <body class="login">
        <header class="cabecalho">
            <h1>Curso de PHP</h1>
            <h2>Seja bem-vindo(a)!</h2>
        </header>
        
        <main class="container">
            <div class="conteudo-menu">
                <h3>Identifique-se!</h3>
                <?php if ($_SESSION['errors']) : ?>
                    <div class="errors">
                        <?php foreach ($_SESSION['errors'] as $erro) : ?>
                            <p><?= $erro ?></p>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
                <form action="#" method="post">
                    <div class="campo">
                        <label for="email">E-mail :</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="campo">
                        <label for="senha">Senha :</label>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <button>Entrar</button>
                </form>
            </div>
        </main>
        
        <?php require_once('../../components/footer.php'); ?>
    </body>
</html>