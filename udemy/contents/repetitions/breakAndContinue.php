<h3 class="titulo">Break e Continue</h3>

<?php
    $contador = 10;

    for(;;){
        echo $contador . '<br/>';
        $contador++;

        if($contador > 20){
            break;
        }
    }
    echo 'Fim!! <br/><br/>';

    for(;;){
        $contador++;
        if($contador % 2 === 1){
            continue;
        }

        echo $contador . '<br/>';

        if($contador >= 30){
            break;
        }
    }

    echo '<br/>';
    foreach(array(1, 2, 3, 4, 5) as $numero){

        if($numero === 5){
            break;
        }

        if($numero % 2 === 0){
            continue;
        }

        echo $numero . '<br/>';
    }
?>