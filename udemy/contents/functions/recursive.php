<h3 class="titulo">Recursividade</h3>

<?php
    function somaUmAte($numero)
    {
        $soma = 0;

        for(; $numero >= 1; $numero--)
        {
            $soma += $numero;
        }
        return $soma;
    }

    echo somaUmAte(10) . '<br/>';
    echo '<br/>';

    function somaRecursividade($numero)
    {
        if($numero === 1)
        {
            return 1;
        }

        return $numero + somaRecursividade($numero - 1);
    }

    echo somaRecursividade(5) . '<br/>';
    echo '<br/>';

    function somaRecursividadeReduzida($numero)
    {
        return $numero === 1 ? 1 : $numero + somaRecursividadeReduzida($numero - 1);
    }

    echo somaRecursividadeReduzida(5) . '<br/>';
    echo '<br/>';
?>