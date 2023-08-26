<h3 class="titulo">Polimorfismo</h3>

<?php
    abstract class Comida
    {
        public $peso;
    }

    class Arroz extends Comida
    {}

    class ArrozDoce extends Arroz
    {}

    class Feijao extends Comida
    {}
    // __________________________

    class Pessoa
    {
        public $peso;

        function __construct($peso)
        {
            $this -> peso = $peso;
        }

        public function Comer(Comida $comida)
        {
            $this -> peso += $comida -> peso;
        }
    }

    $comida01 = new Arroz();
    $comida01 -> peso = 0.45;

    $comida02 = new Feijao();
    $comida02 -> peso = 0.53;

    $comida03 = new ArrozDoce();
    $comida03 -> peso = 0.15;

    $pessoa01 = new Pessoa(83.45);
    $pessoa01 -> Comer($comida01);
    // $pessoa01 -> Comer($comida02);
    $pessoa01 -> Comer($comida03);
    echo $pessoa01 -> peso;
?>