<h3 class="titulo">Traits</h3>

<?php
    trait validacao
    {
        public function validarString($string)
        {
            return isset($string) && $string !== '';
        }
    }

    // Substituindo a forma como cria uma class ou uma interface
    trait validacaoMelhor
    {
        public function validarString($string)
        {
            return isset($string) && trim($string);
        }
    }

    class Usuario
    {
        use validacao, validacaoMelhor
        {
            // Resolvendo conflitos gerados pelo mesmo uso de nome de método

            validacaoMelhor::validarString insteadOf validacao;
            // Definindo o nivel de prioridade dos métodos de acordo com a classe

            validacao::validarString as validacaoSimples;
            // Definindo o nome do método existente como outro nome
        }
    }

    $usuario = new Usuario();
    $resultado = $usuario -> validarString('testando uma string');
    var_dump($resultado);
    echo '<br/>';

    $resultado = $usuario -> validacaoSimples('teste uma string diferente da anterior');
    var_dump($resultado);
    echo '<br/>';
?>