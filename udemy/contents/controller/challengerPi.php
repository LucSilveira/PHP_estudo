<h3 class="titulo">Desafio do π</h3>

<?php
    echo pi() . '<br/>';
    $pi = 3.14;

    // Verificando valores
    if($pi === pi())
    {
        echo 'Iguais <br/>';

    }else{
        echo 'Diferentes <br/>';
    }
?>