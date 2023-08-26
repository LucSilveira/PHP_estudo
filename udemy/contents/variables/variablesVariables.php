<h3 class="titulo">Variáveis variáveis</h3>

<?php
    $exemplo = 'Exemplo 01';
    $$exemplo = 'Exemplo 02';

    echo "$exemplo {$$exemplo}" . '<br/>';

    $epa = "opa";
    $opa = "vish";
    $vish = "eita!!!!";
    echo "$epa . {$opa}" . '<br/>';
    echo "{$$epa} . {$$$epa}";
?>