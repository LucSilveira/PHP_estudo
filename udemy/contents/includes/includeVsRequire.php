<h3 class="titulo">Include vs Require</h3>

<?php
    ini_set('display_errors', 1);

    echo 'Usando include com arquivo inexistente...' . '<br/>';
    include('arquivo_inexistente.php');

    echo 'Usando require com arquivo inexistente...' . '<br/>';
    require('arquivo_inexistente.php');

    echo 'Não achou o file com o require....';
?>