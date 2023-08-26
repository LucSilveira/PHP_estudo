<h3 class="titulo">Switch</h3>

<?php
    $categoria = 'luxo';
    $preco = 0.0;
    $carro = '';

    switch(strtolower($categoria)){
        case 'luxo' : {
            $carro = "Mercedes";
            $preco = 250000;
            break;
        }
        case 'suv Básico' : {
            $carro = "Renegade";
            $preco = 80000;
            break;
        }
        case 'sedan' :
            $carro = 'Etios';
            $preco = 55000;
            break;
        default : 
            $carro = "Mobi";
            $preco = 33000;
            break;
    }

    echo $carro . '<br/>';
    echo 'R$ : ' . number_format($preco, 2, ',', '.');
?>