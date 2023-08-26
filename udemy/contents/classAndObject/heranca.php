<h3 class="titulo">Herança</h3>

<?php
    class Pessoa
    {
        public $nome;
        public $idade;

        function __construct($novoNome, $idade)
        {
            $this -> nome = $novoNome;
            $this -> idade = $idade;
            echo "Pessoa criada(o)!" . '<br/>';
        }

        function __destruct()
        {
            echo "Vlw e flw!";
        }

        public function SeApresentar()
        {
            echo "{$this->nome}, {$this->idade} anos" . '<br/>';
        }
    }

    class Usuario extends Pessoa
    {
        public $login;

        function __construct($nome, $idade, $login = null)
        {
            parent::__construct($nome, $idade);
            $this -> login = $login;
            echo "Usuário(a) criado(a) !" . '<br/>';
        }

        function __destruct()
        {
            echo "Flw e vlw!";
        }

        public function SeApresentar()
        {
            echo "@{$this->login} - {$this->nome}, {$this->idade} anos" . '<br/>';
        }
    }

    $usuario01 = new Usuario("Lucas", 20, "lucax_sp");
    $usuario01 -> SeApresentar();
    echo '<br/>';

    $usuario02 = new Usuario('Gustavo', 19);
    $usuario02 -> SeApresentar();
    unset($usuario02);
?>