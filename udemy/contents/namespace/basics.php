<?php namespace contexto; ?>
<!-- Para criar um namespace é preciso que o mesmo seja o primeiro comando do seu arquivo -->

<h3 class="titulo">Exemplo Básico</h3>

<?php
    echo __NAMESPACE__ . '<br/>';
    // Exibindo o valor do namespace

    const constant01 = 123;  // Criando uma constante relacionada ao namespace da 1º linha
    define('contexto\constant02', 456); // Definindo uma constante atrelada ao namespace pelo 'define'
    define(__NAMESPACE__ . '\constant03', 789); // Definindo um novo contexto dentro do declarado na 1º Linha
    define('outro_contexto\constant04', 321); // Definindo a variavel fora do contexto que estamos inseridos
    
    /* _________________________________________________________________________________________________________ */
    echo constant01 . '<br/><br/>';

    echo constant02 . '<br/><br/>';
    
    echo \contexto\constant03 . '<br/>'; // O '\' é usado para voltar na raiz dos namespaces e entrar no que foi informado
    echo constant(__NAMESPACE__ . '\constant03') . '<br/><br/>';

    echo \outro_contexto\constant04 . '<br/>';
    // --------------------------------------------------------------------------------------------------------

    function Soma($a, $b)
    {
        return $a + $b;
    }

    echo \contexto\soma(1, 4) . '<br/>';
    echo \soma(2, 8) . '<br/>';
?>