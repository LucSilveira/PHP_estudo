<h3 class="titulo">Desafio do laço for</h3>

<?php
    $hashtag = "#";
    $resultado = "";

    for($i = 1; $i <= 5; $i++)
    {
        $resultado .= $hashtag;
        echo $resultado . '<br/>';
    }
    
    // echo $resultado . '<br/>';
    // substr($resultado, 0, -1);
    for($j = strlen($resultado); $j > 1; $j -= 1)
    {
        $resultado = substr($resultado, 0, -1);
        echo $resultado . '<br/>';
    }
?>