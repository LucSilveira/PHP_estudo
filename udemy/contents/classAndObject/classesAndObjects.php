<h3 class="titulo">Classes e Objetos</h3>

<?php
    // Criando uma classe
    class Cliente
    {
        public $nome = 'Anônimo';
        public $idade = 18;

        public function SeApresentar()
        {
            echo "Olá {$this->nome}, seja bem vindo(a)!" . '<br/>';
            echo "Sua idade é {$this->idade}?" . '<br/><br/>';
        }
    }

    // Criando um objeto cliente
    $cliente01 = new Cliente();
    $cliente01 -> SeApresentar(); /* Para se acessar os méthodos de uma classe utiliza-se o -> */

    $cliente02 = new Cliente();
    $cliente02->nome = 'Marcos';
    $cliente02->idade = 22;
    $cliente02 -> SeApresentar();
?>