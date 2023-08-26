<h3 class="titulo">Modificador final</h3>

<?php

    abstract class Abstrata
    {
        abstract public function metodo01();

        public final function metodo02()
        {
            echo 'Não vou mudar!' . '<br/>';
        }
    }

    class Classe extends Abstrata
    {
        public function metodo01()
        {
            echo 'Executando método 01' . '<br/>';
        }

        // public function metodo02()
        // {
        //     echo 'Extendendo método 02' . '<br/>';
        // }
    }

    $classe = new Classe();
    $classe -> metodo01();
    $classe -> metodo02();

    final class Unica
    {
        public $atributo = "Valor";
    }

    $unica = new Unica();
    echo $unica -> atributo;

    // class Duplicata extends Unica
    // {
    //     public $atributo02;
    // }
?>