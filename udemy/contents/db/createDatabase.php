<h3 class="titulo">Criar banco de dados</h3>

<?php
    require_once('context.php');

    $context = novaConexao(null);
    $sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

    $result = $context -> query($sql);

    if($result)
    {
        echo 'Sucessooo ;-D';
    }else{
        echo 'Erro : ' . $context -> error;
    }

    $context -> close();
?>