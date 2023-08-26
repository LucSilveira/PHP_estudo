<h3 class="titulo">Desafio Intdiv</h3>

<?php
    require_once('challengerIntdiv/contextChallenger.php');

    // use Aritmetica;

    $number01 = 6;
    $number02 = 8;
    // $resultado = Aritmetica\IntDiv($number01, $number02);
    // echo "Resultado : $resultado";

    use function Aritmetica\IntDiv;

    try{
        echo IntDiv($number01, $number02) . '<br/>';

    }catch(Aritmetica\IntDivDecimalException $e){

        echo "Resultado não é um inteiro";
    }
?>