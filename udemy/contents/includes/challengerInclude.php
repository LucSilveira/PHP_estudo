<h3 class="titulo">Desafio do Include</h3>

<?php
    require_once('challengerInclude/People.php');
    require_once('challengerInclude/User.php');

    echo '<br/>';
    $pessoa01 = new Pessoa("Exemplo de pessoa", 20);
    echo $pessoa01 -> SeApresentar();
    $pessoa01 = null;
    
    echo '<br/>';
    $usuario01 = new Usuario("Exemplo de usuário", 20, 'exUsuario01');
    echo $usuario01 -> SeApresentar();
    $usuario01 = null;
?>