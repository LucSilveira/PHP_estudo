<h3 class="titulo">While e Do-while</h3>

<?php
    $contador = 0;

    while($contador < 5){
        echo "Passou pela {$contador}º vez" . '<br/>';
        $contador++;
    }
    echo '<br/>';
    
    const VALOR_LOOP = 5;
    $contador = 0;

    do{
        echo "Voltou pela {$contador}º vez" . '<br/>';
        $contador++;
        
    }while($contador < VALOR_LOOP);
?>