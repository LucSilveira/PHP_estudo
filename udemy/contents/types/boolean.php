<h3 class="titulo">Variáveis booleanas</h3>

<?php
    echo true . '<br/>';
    echo false . '<br/>';
    echo var_dump(true) . '<br/>';
    echo var_dump(false) . '<br/>';
    echo is_bool('true');
    echo is_bool(true) . '<br/><br/>';

    echo '<p>Regras : </p>' . '<br/>';
    echo var_dump((bool) 0) . '<br/>'; //False
    echo var_dump((bool) 54) . '<br/>';
    echo var_dump((bool) 0.0) . '<br/>'; //False
    echo var_dump((bool) 0.000001) . '<br/>';
    echo var_dump((bool) "") . '<br/>'; //False
    echo var_dump((bool) " ") . '<br/>';
    echo var_dump((bool) "0") . '<br/>'; //False
?>