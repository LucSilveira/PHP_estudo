<h3 class="titulo">Argumentos e Retornos</h3>

<?php
    function obterMensagem($nome)
    {
        return "Seja bem-vindo(a) - {$nome}!";
    }

    $result = obterMensagem('Lucas');
    echo $result . '<hr/><br/>';

    function soma($a, $b){
        return $a + $b;
    }

    $result02 = soma(4, 5);
    $result03 = soma(15, 5);
    echo $result02 . '<br/>';
    echo $result03 . '<br/>';
?>