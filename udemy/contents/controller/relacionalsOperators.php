<h3 class="titulo">Operadores relacionais</h3>

<?php
    echo var_dump(1 == 1);
    echo var_dump(1 >= 1);
    echo var_dump(1 <= 1);
    echo var_dump(1 != 1);
    echo var_dump(1 <> 1) . '<br/>';

    echo var_dump(4 < 18);
    echo var_dump(1 > 12);
    echo var_dump(1 <=> 1) . '<br/>'; //Se somente se (se A for verdadeiro B é verdadeiro)
    
    echo var_dump(1 == '1');
    echo var_dump(1 === '1');
    echo var_dump(1 != '1');
    echo var_dump(1 !== '1') . '<br/><br/>';


    // Operadores dentro do If
    echo '<p class="divisao">Relacionais no If/else</p><hr>';
    $idade = 53;

    if($idade < 18){
        echo 'Menor de idade';

    }else if($idade <= 40){
        echo 'Adulto';

    }else if($idade < 55){
        echo 'Tiozão';

    }else if($idade > 55){
        echo 'Coroa';

    }else{
        echo 'Múmia';
    }

    echo '<br/><br/>';
    
    // Espaceship
    echo '<p class="divisao">Espaceship</p><hr>';
    
    echo var_dump(50 <=> 3) . '<br/>';
    echo var_dump(50 <=> 50) . '<br/>';
    echo var_dump(5 <=> 50) . '<br/>';
    
    echo '<br/><br/>';
    
    // Descobrindo se valores são V ou F
    echo '<p class="divisao">Descobrindo se valores são V ou F</p><hr>';

    echo var_dump(!!5) . '<br/>';
    echo var_dump(!!0) . '<br/>';
    echo var_dump(!!"") . '<br/>';
?>