<h3 class="titulo">Funções & Escopo</h3>

<?php
    function imprimirMensagem(){
        echo "Olá <br/>";
        echo "Até a próxima! <br/>";
    }

    imprimirMensagem();
    echo '<br/>';

    $variavel = 1;
    function trocarValor(){
        $variavel = 2;
        echo "Durante a função : $variavel <br/>";
    }
    
    echo 'Valor da variável :' . '<hr/>';
    echo "Antes : $variavel" . '<br/>';
    trocarValor();
    echo "Depois : $variavel" . '<br/><br/>';
    

    function trocarValorVerdadeiro(){
        global $variavel;
        
        $variavel = 2;
        echo "Durante a função : $variavel <br/>";
    }

    echo 'Valor da variável : <hr/>';
    echo "Antes : $variavel" . '<br/>';
    trocarValorVerdadeiro();
    echo "Depois : $variavel" . '<br/><br/>';


    function trocarValorVerdadeiro02(&$variavel02){
        
        $variavel02 = 3;
        echo "Durante a função : $variavel02 <br/>";
    }

    echo 'Valor da variável : <hr/>';
    echo "Antes : $variavel" . '<br/>';
    trocarValorVerdadeiro02($variavel);
    echo "Depois : $variavel" . '<br/>';
?>