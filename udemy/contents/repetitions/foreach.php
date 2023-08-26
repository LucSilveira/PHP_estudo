<h3 class="titulo">Laço Foreach</h3>

<?php
    $diasSemana = [ 1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

    foreach($diasSemana as $diaSemana){
        echo $diaSemana . '<br/>';
    }
    echo '<br/>';
    
    foreach($diasSemana as $indice => $diaSemana){
        echo $indice . ' - ' .$diaSemana . '<br/>';
    }
    echo '<br/>';
    
    $matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b','c', 'd']
    ];
    
    foreach($matrix as $linha){
        foreach($linha as $coluna){
            echo $coluna . '<br/>';
        }
    }
    echo '<br/>';

    $numeros = [1, 2, 3, 4, 5];
    foreach($numeros as &$dobroNumero){
        $dobroNumero *= 2;
        echo $dobroNumero . '<br/>';
    }
?>