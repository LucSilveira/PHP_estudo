<?php 
    namespace Nome\Bem\Grande; 
    echo __NAMESPACE__ . '<hr/>';

    const constante = 123;

    function Soma($a, $b)
    {
        return $a + $b;
    }

    class Classe
    {
        public $variavel;

        function funct()
        {
            echo __NAMESPACE__ . ' -> ' . __CLASS__ . ' -> ' . __METHOD__ . '<br/>';
        }
    }
?>