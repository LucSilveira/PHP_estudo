<h3 class="titulo">Operadores lógicos</h3>

<?php
    echo "<p class='divisao'>Negação lógica</p>";
    var_dump(true);
    var_dump(!true);
    echo '<br/><br/>';

    echo "<p class='divisao'>Tabela verdade do AND (E)</p><hr/>";
    var_dump(true && true);
    var_dump(true && false);
    var_dump(false && true);
    var_dump(false && false);
    
    echo '<br/>';
    var_dump(true and true);
    var_dump(true and false);
    var_dump(false and true);
    var_dump(false and false);
    echo '<br/><br/>';
    
    echo "<p class='divisao'>Tabela verdade do OR (OU)</p><hr/>";
    var_dump(true || true);
    var_dump(true || false);
    var_dump(false || true);
    var_dump(false || false);
    echo '<br/>';
    
    var_dump(true or true);
    var_dump(true or false);
    var_dump(false or true);
    var_dump(false or false);
    echo '<br/><br/>';

    echo "<p class='divisao'>Tabela verdade do XOR (OU Exclusiwvo)</p><hr/>";
    var_dump(true xor true);
    var_dump(true xor false);
    var_dump(false xor true);
    var_dump(false xor false);
    echo '<br/><br/>';

    echo "<p class='divisao'>Exemplo</p><hr/>";
    $idade = 62;
    $sexo = 'F';

    if($idade >= 60 && $sexo === 'F' || $idade >= 65 && $sexo === 'M'){
        echo "Pode se aposentar : $sexo";
    // }elseif($idade >= 65 && $sexo === 'M'){
    //     echo 'Pode se aposentar';
    // }
    }else{
        'Idade não permitida para se aposentar';
    }
    echo '<br/>';

?>