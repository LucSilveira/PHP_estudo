<h3 class="titulo">Mapa de arrays</h3>

<?php
    $dados = array(
        "Idade" => 20,
        "cor" => "roxo",
        "peso" => 110
    );

    print_r($dados);
    
    // Adicionando valores ao array
    $dados[] = "valor adicionado";
    print_r($dados);
    
    $dados['outraForma'] = "valor adicionado novamente";
?>