<h3 class="titulo">Operações aritméticas</h3>

<?php
    echo 1 + 1, '<br/>';
    var_dump(1 + 1) . '<br/>';
    echo 1 + 2.5 . '<br/>';
    echo 10 - 2 . '<br/>';
    echo 5 * 2 . '<br/>';
    echo 7 / 4 . '<br/><br/>';
    echo "Usando a função intdiv() - " . intdiv(7, 4), '<br/>';
    echo "Arredondando valores com o round() - " . round(7 / 4), '<br/>';
    echo "Modulando valores de 7 / 4 - " . 7 % 4 . '<br/>';
    echo "Potenciando valores 2^3 - ", 2 ** 3 . '<br/><br/>';

    echo '<p>Procedência de operadores</p><br/>';
    echo 
        "<ol>
            <li>Parenteses - '<strong> ( ) </strong>'</li>
            <li>Potência - '<strong> ** </strong>'</li>
            <li>Divisão - '<strong> / </strong>', Multiplicação - '<strong> * </strong>', Mod - '<strong> % </strong>'</li>
            <li>Adição - '<strong> + </strong>', Subtração - '<strong> - </strong>'</li>
        </ol";
?>