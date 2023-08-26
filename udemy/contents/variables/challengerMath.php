<h3 class="titulo">Desafio de equação</h3>

<?php
    // Primeiro parte da equação
    $numerador01 = ((6 * (3 + 2)) ** 2);
    $denominador01 = 3 * 2;

    $conta01 = $numerador01 / $denominador01;

    // Segunda parte da equação
    $numerador02 = (1 - 5) * (2 - 7);
    $denominador02 = 2;

    // Primeiro cálculo dos númeradores
    $conta02 = ($numerador02 / $denominador02) ** 2;

    // Atribuindo denominados
    $denominador03 = 10;

    // Exibindo resultado da primeira simplificação
    echo '( ' . $conta01 . ' - ' . $conta02 . ' )³' . '<br/>';
    echo '____________' . '<br/>';
    echo $denominador03 . '³ <br/><br/><br/>';

    // Segundo cálculo dos resultados das contas
    $conta03 = $conta01 - $conta02;

    // Exibindo resultado da segunda simplificação
    echo $conta03 . '³ <br/>';
    echo '____' . '<br/>';
    echo $denominador03 . '³ <br/><br/><br/>';

    // Cálculo final da operação
    $resultado = ($conta03 ** 3) / ($denominador03 ** 3);

    // Exibindo resultado final
    echo 'Resultado final : ' . $resultado;
?>