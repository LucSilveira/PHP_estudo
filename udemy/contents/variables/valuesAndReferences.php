<h3 class="titulo">Valores e referências</h3>

<?php
    // Atruibuição por valores
    $var = 'Valor inicial';
    echo $var . '<br/>';

    $varValue = $var;
    echo $varValue . '<br/>';

    $varValue = 'Novo valor aqui!!';
    echo $varValue . '<br/><br/>';
    /* ===============================*/

    // Atribuição por referencia
    $varReference = &$var;
    $varReference = 'mesma referencia';
    echo $varReference . '<br/>';
    echo $var;
?>