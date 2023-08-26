<?php
    namespace Pessoa;
    
    class Pessoa
    {
        public $nome;
        public $idade;
        
        public function __construct($nome, $idade)
        {
            $this -> nome = $nome;
            $this -> idade = $idade;

            echo 'Pessoa criada!' . '<br/>';
        }

        public function __destruct()
        {
            echo "{$this -> nome} diz : Tchau!" . '<br/>';
        }

        public function SeApresentar()
        {
            return "{$this -> nome} possui {$this -> idade} anos!" . '<br/>';
        }
    }
?>