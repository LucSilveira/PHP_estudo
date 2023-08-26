<h3 class="titulo">Closure & Callable</h3>

<?php
    // Callable - Algo que pode ser chamado;
    $soma01 = function($a, $b)
    {
        return $a + $b;
    };

    echo $soma01(5, 4) . '<br/>';
    echo is_callable($soma01) ? 'Sim' : 'Não' . '<br/>';

    echo '<br/>';

    var_dump($soma01);
?>