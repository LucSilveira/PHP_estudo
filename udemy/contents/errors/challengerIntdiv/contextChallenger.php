<?php
    namespace Aritmetica;

    class IntDivDecimalException extends \Exception
    {
        public $resultado;

        public function __construct($message, $code = 0, $previous = null)
        {
            echo "Erro personalizado : $message" . '<br/>';
            parent::__construct($message, $code, $previous);
        }
    }

    function IntDiv($a, $b)
    {
        if($b == 0)
        {
            throw new \DivisionByZeroError();

        }else if($a % $b > 0){

            throw new IntDivDecimalException("O resultado da divisão é um decimal");
        }

        return $a / $b;
    }
?>    