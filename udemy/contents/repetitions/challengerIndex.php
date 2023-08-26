<h3 class="titulo">Desafio da impressão</h3>

<?php
    $array = [
        'AAA', 'BBB', 'CCC',
        'DDD', 'EEE', 'FFF'
    ];

    // Utilizando o Foreach
    echo '<br/><p>Utilizando o foreach</p><hr/>';
    foreach($array as $indice => $valor)
    {
        if($indice % 2 !== 0)
        {
            continue;
        }
        
        echo $valor . '<br/>';
    }
    echo '<br/>';
    
    // Utilizando o For
    echo '<p>Utilizando o for</p><hr/>';
    for($i = 0; $i < count($array); $i++)
    {
        if($i % 2 !== 0)
        {
            continue;
        }

        echo $array[$i] . '<br/>';
    }
?>