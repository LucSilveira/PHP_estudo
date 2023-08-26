<h3 class="titulo">Traits</h3>

<?php
    trait validacao
    {
        public $a = 'Valor a';

        public function validarString($string01)
        {
            return isset($string01) && $string01 !== '';
        }
    }

    // Substituindo a forma como cria uma class ou uma interface
    trait validacaoMelhor
    {
        public $b = 'Valor b';
        public $c = 'Valor c - (privado)';

        public function validarStringMelhor($string02)
        {
            return isset($string02) && trim($string02);
        }

        public function imprimirValorC()
        {
            echo $this->c . '<br/>';
        }
    }

    class Usuario
    {
        use validacao, validacaoMelhor;
    }

    $novoUsuario = new Usuario();
    var_dump($novoUsuario->validarString('testeando uma string'));
    echo '<br/>';
    
    $resultado = $novoUsuario -> validarStringMelhor('t3stando uma string mais complexa que a outra');
    var_dump($resultado);    
    echo '<br/>';

    echo $novoUsuario -> a . '<br/>';
    echo $novoUsuario -> b . '<br/>';
    echo $novoUsuario -> imprimirValorC() . '<br/>';
?>