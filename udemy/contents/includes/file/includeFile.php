<?php
    echo 'Carregando : include_file' . '<br/>';

    // Definindo uma variável para ser acessada globlamente quando instânciado
    // o arquivo em questão
    $globalVar = "Variável globar definida!";
    
    // Definindo uma função para ser acessada globlamente quando instânciado
    // o arquivo em questão
    function Soma($a, $b)
    {
        return $a + $b;
    }
    
    // Verificando se a função já não exite na aplicação
    // Para que quando instânciada mais de uma vez não ocorra conflito
    if(!function_exists('Soma'))
    {
        function Soma($a, $b)
        {
            return $a + $b;
        }
    }

    echo '<hr/><br/>';
?>