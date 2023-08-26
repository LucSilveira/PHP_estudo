<h3 class="titulo">Atribuições</h3>

<?php
    $titulo = 'Atribuição';

    $numero01 = 10;
    echo $numero01 . '<br/>';

    $numero02 = $numero01 - 2;
    echo $numero02 . '<br/>';

    $numero03 = $numero02 + 1.5;
    echo $numero03 . '<br/>';

    $numero03--;
    echo $numero03 . '<br/>';

    --$numero03;
    echo $numero03 . '<br/>';

    $numero03++;
    echo $numero03 . '<br/>';

    ++$numero03;
    echo $numero03 . '<br/>';
    
    $numero03 -= 2;
    echo $numero03 . '<br/>';
    
    $numero03 += 2;
    echo $numero03 . '<br/>';
    
    $numero03 *= 2;
    echo $numero03 . '<br/>';
    
    $numero03 /= 2;
    echo $numero03 . '<br/>';
    
    $numero03 %= 2;
    echo $numero03 . '<br/>';
    
    $numero03 **= 2;
    echo $numero03 . '<br/>';

    $texto01 = "valor existente";
    echo $texto01 . '<br/>';
    
    $texto02 = $texto04 ?? "valor default";
    echo $texto02 . '<br/>';

    $texto03 = "Esse é um texto";
    echo $texto03 . '<br/>';

    $texto03 = $texto03 . ' de verdade';
    echo $texto03 . '<br/>';
?>