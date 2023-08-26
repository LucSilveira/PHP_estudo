<?php
    session_start();
    print_r($_SESSION);
?>

<p>
    <b>Nome : </b><?= $_SESSION['nome']?>
    <br/>
    <b>Email : </b><?= $_SESSION['email']?>
</p>

<?php
    $_SESSION['email'] = "lucas-lindo@email.com";
?>

<p><a href="../exercices/exercise.php?dir=../contents/sessionsAndCookies&file=session">Alterar sessão</a></p>
<p><a href="../exercices/exercise.php?dir=../contents/sessionsAndCookies&file=clearSessions">Limpar a sessão</a></p>

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