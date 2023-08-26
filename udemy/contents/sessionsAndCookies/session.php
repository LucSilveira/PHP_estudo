<h3 class="titulo">Sessão</h3>

<?php
    // para acessar as sessões é preciso colocar o comando a seguir
    session_start();

    print_r($_SESSION);
    echo '<br/>';

    if(!$_SESSION['nome'])
    {
        $_SESSION['nome'] = "Lucas";
    }

    if(!$_SESSION['email'])
    {
        $_SESSION['email'] = "lucas@email.com";
    }

    echo '<br/>';
    print_r($_SESSION);
?>

<p><a href="../exercices/exercise.php?dir=../contents/sessionsAndCookies&file=updateSession">Alterar sessão</a></p>

<style>
    p{
        margin-top: 1em;
    }

    p > a{
        text-decoration: none;
        color : #9c27b0;
        width: 10vw;
        height: 6vh;
        cursor: pointer;
        padding: 0.4em 0.8em;
        transition: 0.10ms;
    }

    p > a:hover{
        background-color: #9c27b0;
        color: #fff;
    }
</style>