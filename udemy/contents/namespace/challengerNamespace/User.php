<?php
    namespace Usuario;

    require_once('People.php');

    use Pessoa as ClassePessoa; // Instanciando o namespace da classe pessoa

    class Usuario extends ClassePessoa\Pessoa
    {
        public $login;

        public function __construct($nome, $idade, $login = null)
        {
            parent::__construct($nome, $idade);
            
            $this -> login = $login;

            echo 'Usuario(a) criado com sucesso!' . '<br/>';
        }

        public function __destruct()
        {
            echo 'Muito obrigado, até nunca mais!' . "<br/>";
        }

        public function SeApresentar()
        {
            $login = "@{$this->login} - ";
            return $login . parent::SeApresentar();
        }
    }
?>