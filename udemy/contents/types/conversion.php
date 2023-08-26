<h3 class="titulo">Converções de variáveis</h3>

<?php
    echo '<p>Int para Float : </p>';
    echo is_int(PHP_INT_MAX) . '<br/>';
    echo var_dump(PHP_INT_MAX + 1) . '<br/>';
    echo var_dump(1 + 1.0) . '<br/>'; // Convertendo de 'int' para 'float'
    echo var_dump((float) 5) . '<br/><br/>'; // Convertendo de 'int' para 'float'

    echo '<p>Float para Int : </p>';
    echo var_dump((int) 6.8) . '<br/>'; // Convertendo de 'float' para 'int'
    echo var_dump(intval(2.89)) . '<br/>'; // Convertendo de 'float' para 'int'
    echo var_dump((int) round(2.8)) . '<br/><br/>'; // Convertendo de 'float' para 'int'

    echo '<p>Strings : </p>';
    echo var_dump(3 + "2") . '<br/>';
    echo var_dump("3" . 2) . '<br/>';
    echo is_string("3" . 2) . '<br/>';
    echo is_string(2 + "3") . '<br/>';
    echo var_dump(1 + "cinco") . '<br/>';
    echo var_dump(1 + "5 cinco") . '<br/>';
    echo var_dump((float) "25.4");
?>