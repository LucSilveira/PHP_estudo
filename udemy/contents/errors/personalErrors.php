<h3 class="titulo">Erros personalizados</h3>

<?php

    // Criando uma classe onde se expera que ocorra erros
    class FaixaEtariaException extends Exception
    {
                                                        /* previous é um erro cujo o qual aconteceu
                                                        * antes do esperado da excessão, por exemplo
                                                        * um erro de rede;
                                                        */
        public function __construct($message, $code = 0, $previous = null)
        {
            echo "Erro personalizado : $message" . '<br/>';
            parent::__construct($message, $code, $previous);
        }
    }

    function calcularTempoAposentadoria($idade)
    {
        if($idade < 18)
        {
            throw new FaixaEtariaException("Ainda tem chão filho, rlx");

        }else if($idade > 70){

            throw new FaixaEtariaException("Já deveria estar aposentado");
        }

        return 70 - $idade ;
    }

    $idadesAvaliadas = [15, 35, 60, 80];

    foreach($idadesAvaliadas as $teste)
    {
        try {
            $tempoRestante = calcularTempoAposentadoria($teste);
            echo "Idade : $teste - $tempoRestante anos restante" . '<br/>';

        } catch (FaixaEtariaException $e) {
            echo "Não foi possível calcular para idade : $teste anos" . '<br/>';
            echo "Motivo : {$e -> getMessage()}" . '<br/>';
        }

        echo '<hr/><br/>';
    }
?>