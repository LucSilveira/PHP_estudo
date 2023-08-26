<h3 class="titulo">Classe abstrata</h3>

<?php
    abstract class Abstrata
    {
        public abstract function metodo01();

        abstract protected function metodo02($parametro);
    }

    abstract class FilhaAbstrata extends Abstrata
    {
        public function metodo01()
        {
            echo "Executando método 1" . '<br/>';
        }

        abstract public function metodo03();
    }

    class Concreta extends FilhaAbstrata
    {
        public function metodo01()
        {
            echo "Executando método 01 - extendido" . '<br/>';
            parent::metodo01();
        }

        protected function metodo02($parametro)
        {
            echo "Executando método 02 com parâmetro - $parametro" . '<br/>';
        }

        public function metodo03()
        {
            echo "Executando o método 03" . '<br/>';
            $this -> metodo02('interno');
        }
    }

    $c = new Concreta();
    $c -> metodo01();
    // $c -> metodo02('externo'); // Método protegido, portanto não instânciado fora da classe
    $c -> metodo03();

?>