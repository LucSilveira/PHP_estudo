<h3 class="titulo">Construtor e Destrutor</h3>

<?php
    class Pessoa
    {
        public $nome;
        public $idade;

        function __construct($novoNome, $idade = 18)
        {
            echo 'Construtor invocado!' . '<br/>';
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        function __destruct()
        {
            echo 'Faliceu :(' . '<br/>';
        }

        function SeApresentar()
        {
            echo "{$this->nome}, {$this->idade} anos" . '<br/>';
        }
    }

    $pessoa01 = new Pessoa("Lucas");
    $pessoa01 -> SeApresentar();
    echo '<br/>';
    
    $pessoa02 = new Pessoa("Martha", 50);
    $pessoa02 -> SeApresentar();
    $pessoa02 = null;
?>