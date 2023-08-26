<h3 class="titulo">Constantes de array</h3>

<?php
    const FRUTAS = ['laranja', 'morango'];
    // FRUTAS[0] = 'limão';
    // FRUTAS[] = "banana";
    echo FRUTAS[0] . '<br/>';

    const CARROS = [
        "Fiat" => "Uno",
        "Ford" => "Fiesta"
    ];
    // CARROS["BMW"] = "325i";
    echo CARROS["Fiat"] . '<br/>';

    define('CIDADES', array('Belo Horizonte', 'São Paulo'));
    // Cidades[1] = 'Rio de Janeiro';
    echo CIDADES[1];
?>