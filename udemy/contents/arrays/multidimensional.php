<h3 class="titulo">Array multidimencional</h3>

<?php
    $dados = [
        [
            "nome" => "Roberto",
            "idade" => 26,
            "naturalidade" => "Bahia"
        ],
        [
            "nome" => "Lucas",
            "idade" => 20,
            "naturalidade" => "São Paulo"
        ]
    ];

    echo $dados[0]['nome'] . ' => ' . $dados[0]['idade'] . '<br/>';
    echo $dados[1]['nome'] . ' => ' . $dados[1]['idade'] . '<br/>';
    
    $dados[] = [
        "nome" => "Gustavo",
        "idade" => 19,
        "naturalidade" => "São Paulo"
    ];
        
        
    echo $dados[2]['nome'] . ' => ' . $dados[2]['idade'] . '<br/>';

    $dados[2]["Amor"] = "Miranda";
    print_r($dados[2]);
?>