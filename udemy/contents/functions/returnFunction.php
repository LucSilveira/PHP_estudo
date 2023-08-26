<h3 class="titulo">Retornando função</h3>

<?php
    function soma($a){

        return function($b) use ($a)
        {
            return $a + $b;
        };
    }

    echo soma(3)(5);
    echo '<br/>';
    
    $doisMais = soma(2);
    echo '<br/>';
    echo $doisMais(10);
    
    echo '<br/>';
    echo $doisMais(18);
?>