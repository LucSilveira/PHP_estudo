<h3 class="titulo">Operador ternário</h3>

<?php
    $idade = 70;
    $status;

    if($idade >= 18){
        $status = "Maior de idade";

    }else{
        $status = "Menos de idade";
    }
    echo "$status <br/><br/>";

    $status = $idade >= 18 ? $idade >= 65 ? "Aposentado" : "Maior de idade" : "Menor de idade";
    echo "$status <br/><br/>";
?>