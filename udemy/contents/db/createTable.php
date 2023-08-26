<h3 class="titulo">Criar tabela</h3>

<?php
    require_once('context.php');

    $sql = "CREATE TABLE IF NOT EXISTS Cadastro (
        id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
        nome VARCHAR(100) NOT NULL,
        nascimento DATE,
        email VARCHAR(100) NOT NULL,
        site VARCHAR(100) NOT NULL,
        filhos INT,
        salario FLOAT
    )";

    $context = novaConexao();
    $result = $context -> query($sql);

    if($result)
    {
        echo 'Sucessooo! Tabela criada com sucesso!';
    }else{
        echo 'Erro : ' . $context -> error;
    }

    $context -> close();
?>