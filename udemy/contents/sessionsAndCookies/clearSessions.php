<h3 class="titulo">Limpar a sessão</h3>

<?php
    // Iniciando o uso das sessões
    session_start();

    // para destruir os dados armazendas na sessão, colocar o comando seguinte
    session_destroy();

    // Redirecionando o arquivo para a página inicial
    header('Location: ../exercices/exercise.php?dir=../contents/sessionsAndCookies&file=session');
?>