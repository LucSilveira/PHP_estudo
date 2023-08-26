<h3 class="titulo">Variáveis flutuantes</h3>

<?php

    echo 1.1, '<br/>';
    echo var_dump(1.0), '<br/>';
    echo 'Valor máximo suportado pela máquina ', PHP_FLOAT_MAX, '<br />';
    echo 'Valor mínimo suportado pela máquina ', PHP_FLOAT_MIN, '<br />';
    echo 1.2e3 . '<br/>'; // Resultado = 1.200
    echo 13E-3;
?>