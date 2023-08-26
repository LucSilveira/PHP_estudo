<h3 class="titulo">Métodos mágicos</h3>

<?php
    class Pessoa
    {
        public $nome;
        public $idade;
        
        function __construct($nome, $idade)     
        {
            echo 'Construtor invocadoooooooooooo!' . '<br/>';

            $this -> nome = $nome;
            $this -> idade = $idade;
        }

        public function __destruct()
        {
            echo "E morreu";
        }

        public function __toString()
        {
            return "{$this -> nome} tem {$this -> idade} anos" . '<br/>';
        }

        public function SeApresentar()
        {
            echo $this . '<br/>';
        }

        // Quando passar paramêtros que não foram declarados, 
        // exibe esses paramêtros;
        public function __get($atributo)
        {
            echo "Lendo atributo não declarado : $atributo" . '<br/>';
        }

        // Quando passar valores ao atributo que não foi declarado
        public function __set($atributo, $valor)
        {
            echo "Alterando valor do atributo não declarado : $atributo - $valor" . '<br/>';
        }

        // Quando chamar um método que não existe
        public function __call($metodo, $valores)
        {
            echo "Tentando executar o método : $metodo" . '<br/>';
            echo "com os paramêtros : $valores" . '<br/>';
            print_r($valores);
            echo '<br/>';
        }
    }

    $pessoa = new Pessoa('Lucas', 20);
    $pessoa -> SeApresentar();
    echo $pessoa;

    $pessoa -> nome = "Miranda";
    $pessoa -> SeApresentar();
    echo '<hr/>';

    echo $pessoa -> nomeCompleto;
    echo $pessoa -> nomeCompleto = "Gustavo";
    $pessoa -> exec(1, 'teste', true, [1, 2, 3]);
    $pessoa = null;
?>