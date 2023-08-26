<h3 class="titulo">Trabalhando com If e else</h3>

<?php
    if(true)
    {
        echo 'Serei impresso?' . '<br/>';
    }

    if(false)
    {
        echo 'Verdadeiro - parte 01' . '<br/>';
        echo 'Verdadeiro - parte 01' . '<br/>';

    }else{
        echo 'Falso - parte 01' . '<br/>';
        echo 'Falso - parte 01' . '<br/>';
    }

    if(false){
        echo 'Passo A' . '<br/>';

    }elseif(true){
        echo 'Passo B' . '<br/>';

    }else{
        echo 'Último passo' . '<br/>';
    }

    echo 'FIM';
?>