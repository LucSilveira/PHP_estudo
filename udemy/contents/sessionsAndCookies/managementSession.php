<h3 class="titulo">Gerenciando Sessão</h3>

<?php
    session_start();
    echo session_id() . '<br/>';

    $contador = &$_SESSION['contador'];
    $contador = $contador ? $contador + 1 : 1;
    echo $_SESSION['contador'] . '<br/>';

    // Gerando uma nova sessão sempre que for divisivel por 5
    if($_SESSION['contador'] % 5 === 0)
    {
        session_regenerate_id();
    }

    // Matando a sessao sempre que o contador for maior que 15
    if($_SESSION['contador'] >= 15)
    {
        session_destroy();
    }
?>