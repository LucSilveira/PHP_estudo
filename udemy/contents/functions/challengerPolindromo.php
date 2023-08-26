<h3 class="titulo">Desafio do Polindromo</h3>

<?php
    function Polindromo($palavra)
    {
        $ultimoElemento = strlen($palavra) - 1;

        for($i = 0; $i <= $ultimoElemento; $i++)
        {
            if($palavra[$i] !== $palavra[$ultimoElemento - $i])
            {
                return 'não';
            }
            return 'sim';
        }
    }

    echo Polindromo('ana') . ', ';
    echo Polindromo('subi no onibus') . ', ';
    echo Polindromo('lucas') . ', ';
    echo Polindromo('arara');
    echo '<br/>';
    
    // Utilizando função natova
    function PolindromoNativo($palavra){
        return $palavra === strrev($palavra) ? 'sim' : 'não';
    }

    echo Polindromo('ana') . ', ';
    echo Polindromo('subi no onibus') . ', ';
    echo Polindromo('lucas') . ', ';
    echo Polindromo('arara');
    echo '<br/>';
?>