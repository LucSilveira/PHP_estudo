<h3 class="titulo">Desafio da recursividade</h3>

<?php
    $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];
    $count = count($array);

    function percorrendoArray($array, $nivel = '>')
    { 
        foreach($array as $item)
        {
            if(is_array($item))
            {
                percorrendoArray($item, $nivel . $nivel[0]);
            }else{

                echo "$nivel $item" . '<br/>';
            }
        }
    }

    percorrendoArray($array);
?>