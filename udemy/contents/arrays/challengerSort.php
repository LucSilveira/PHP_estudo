<h3 class="titulo">Desafio do sorteio</h3>

<?php
    $nome = ['Elza', 'Rapunzel', 'Branca de neve', 'Cinderela', 'Ariel'];

    $indice = array_rand($nome);
    echo "<h1><center>$nome[$indice]</center></h1>";
?>