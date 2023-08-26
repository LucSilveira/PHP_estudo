<h3 class="titulo">Constantes</h3>

<?php 
    // Definindo uma constant - 'define'
    define('TAXA_DE_JUROS', 5.9);

    echo TAXA_DE_JUROS . '<br/>';

    //  Outra forma de declarar constates - 'const'
    const NOVA_TAXA = 2.5;
    echo NOVA_TAXA . '<br/>';

    $passarValor = 1.5;
    define('TAXA_DEFINE', $passarValor); // O define permite passar uma variável como valor
    // const TAXA_CONST = $passarValor; /* A const não recebe o valor de uma variável */

    echo TAXA_DEFINE . '<br/>';
    // echo TAXA_CONST . '<br/>';
    const TAXA_CONST_COUNT = 1.5 + 2.5;
    echo TAXA_CONST_COUNT . '<br/><br/>';

    echo PHP_VERSION . '<br/>';
    echo 'Linha de código : ' . __LINE__ . '<br/>';
    echo 'Arquivo de código : ' . __FILE__ . '<br/>';
    echo 'Diretório do código : ' . __DIR__ . '<br/>';

?>