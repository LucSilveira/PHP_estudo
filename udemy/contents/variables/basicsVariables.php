<h3 class="titulo">Variáveis simples</h3>

<?php 
    $numero01 = 565;
    $numero02 = 1;
    $numero03 = $numero01 - $numero02;

    echo var_dump($numero01) . '<br/>';
    echo isset($numero01) . '<br/>'; // Verificando se a váriavel está setada
    unset($numero03); // Verificando se não está setada
    echo '<br/>' . var_dump($numero03) . '<br/><br/>';

    $variavel = 10;
    echo var_dump($variavel) . " - " . $variavel. '<br/>';
    
    $variavel = "Agora sou um texto";
    echo var_dump($variavel) . " - " . $variavel . '<br/>';

    // Validações das variáveis
    $souValido = 'válido';
    $souValido02 = 'válido';
    $_sou_valido = 'válido';
    // $1inválido = 'inválido'
    // $%invalido02 = 'inválido'
    // $inválido03% =  'inválido'
    // $invalido-04 = 'inválido'
    
?>