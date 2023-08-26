<h3 class="titulo">Argumentos variáveis</h3>

<?php
    function Soma($a, $b){

        return $a + $b;
    }

    echo soma(14, 15) . '<br/>';
    echo soma(5, 4, 11) . '<br/><br/>';

    function somaCompleta(...$numeros)
    {
        $soma = 0;

        foreach($numeros as $numero)
        {
            $soma += $numero;
        }

        return $soma;
    }

    $array = [1, 2, 3, 4];
    echo somaCompleta(...$array) . '<br/><br/>';

    function membros($titulo, ...$dependentes)
    {
        echo "Titular : $titulo <br/>";

        if($dependentes)
        {
            foreach($dependentes as $dependente)
            {
                echo "Dependente : $dependente" . '<br/>';
            }
        }
    }

    echo '<br/>';
    membros("Ana Silva", "Pedro", "Marcos", "Pedro");
?>