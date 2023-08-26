<h3 class="titulo">Comparações de arrays</h3>

<?php
    $arra01 = ['nome' => 'Maria', 'idade' => 20];
    $arra02 = ['nome' => 'Maria', 'idade' => 20];
    var_dump($arra01 == $arra01);
    var_dump($arra01 === $arra02);

    $arra03 = ['idade' => 20, 'nome' => 'Maria'];
    echo '<br/>';
    var_dump($arra01 == $arra03);
    var_dump($arra01 === $arra03);
    echo '<br/>';
    var_dump($arra01 != $arra03);
    var_dump($arra01 !== $arra03);
    echo '<br/>';

    $arra04 = ['idade' => '20', 'nome' => 'Maria'];
    var_dump($arra01 == $arra04);
    var_dump($arra01 === $arra04);
?>