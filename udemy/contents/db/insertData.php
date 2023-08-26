<h3 class="titulo">Inserindo dados na tabela</h3>

<?php
    require_once('context.php');

    $sql = "INSERT  INTO 
                        Cadastro (nome, nascimento, email, site, filhos, salario)
                    VALUES
                        ('Lucas', '2001-03-02', 'lucas@email.com', 'https://lucas-lindo.com.br', 0, 1300.50),
                        ('Gustavo', '2002-01-01', 'gustavo@email.com', 'https://gustavo-chato.com.br', 15, 1300.55),
                        ('Miranda', '2003-001-01', 'miranda@email.com', 'https://miranda-insuportavel.com.br', 2, 1300.55);";

    $context = novaConexao();
    $result = $context -> query($sql);

    if($result)
    {
        echo 'Dados adicionados com sucesso!' . '<br/>';
    }else{

        echo 'Erro : ' . $context -> error;
    }

    $context -> close();
?>