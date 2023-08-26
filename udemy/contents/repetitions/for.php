<h3 class="titulo">Laço For</h3>

<?php
    for($cont = 1; $cont <= 5; $cont++){
        echo $cont . "<br/>";
    }

    for(; $cont <= 10; $cont++){
        echo $cont . "<br/>";
    }

    echo '<br/>';
    $diasSemana = [ 1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
    
    for($i = 1; $i < count($diasSemana); $i++){
        echo $diasSemana[$i] . '<br/>'; 
    }
    
    echo '<br/>';
    $matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b','c', 'd']
    ];

    for($i = 0; $i < count($matrix); $i++){
        for($j = 0; $j < count($matrix[$i]); $j++){
            echo $matrix[$i][$j] . '<br/>';
        }
    }
?>