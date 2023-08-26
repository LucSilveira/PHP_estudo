<h3 class="titulo">Operações</h3>

<?php
    $dados01 = [
        "nome" => "Jose",
        "idade" => 28
    ];

    $dados02 = [
        "região" => "São Paulo",
        "naturalidade" => "brasileiro"
    ];

    $dadosCompletos = $dados01 + $dados02;
    print_r($dadosCompletos);
    echo '<br/>';

    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];

    $numeros = array_merge($pares, $impares);
    print_r($numeros);
    echo '<br/>';

    // ordenando o array
    sort($numeros);
    print_r($numeros);
?>