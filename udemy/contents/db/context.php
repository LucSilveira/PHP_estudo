<?php
    function novaConexao($banco = 'curso_php')
    {
        $servidor = '127.0.0.1:3306';
        $usuario = 'root';
        $senha = '';

        $context = new mysqli($servidor, $usuario, $senha, $banco);
        if($context -> connect_error)
        {
            die('Erro' . $context -> connect_error);
        }

        return $context;
    }
?>