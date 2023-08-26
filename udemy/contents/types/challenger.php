<h3 class="titulo">Desafio de precedência dos operadores</h3>

<?php
    $pularLinha = '<br/>';
    echo '<p>1º Qual o valor da expressão?</p>';
    echo "2 + 5 * 3 + (12 / 6) / (-8 + 2 ** 3)" . $pularLinha . $pularLinha;
    
    echo '<p>2º Qual a expressão imprime o valor 100?</p>';
    echo "a) (1 + 1) * 20 - 15;" . $pularLinha;
    echo "b) 4 * 5 ** 2;" . $pularLinha;
    echo "c) 2 ** 3 ** 4 / 1e25;" . $pularLinha;
    echo "d) 3 + (3 * 8) / 2 - 3;" . $pularLinha;
?>