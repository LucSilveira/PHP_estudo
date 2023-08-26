<?php
    echo 'Carregando : .... include_once_file' . '<br/>';

    $variavel = 'Estou definida';

    if(!function_exists('Soma')){
        function Soma($a, $b)
        {
            return $a + $b;
        }
    }
?>