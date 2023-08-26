<h3 class="titulo">Argumentos padrão</h3>

<?php
    function Saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente')
    {
        return "Bem vindo, $nome $sobrenome!" . '<br/>';
    }

    echo Saudacao();
    echo Saudacao(null);
    echo Saudacao("Luqueta", "Goxtoso");
    echo '<hr/><br/><br/>';

    function PedidoDeLanche($comida, $bebida = 'Água')
    {
        return "Para comer : $comida <br/> Para beber : $bebida" . '<br/>';
    }

    echo PedidoDeLanche("Pizza", "Coquinha trincada");
    echo PedidoDeLanche("Hamburguer", "H2OH");
?>