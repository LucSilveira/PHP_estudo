<h3 class="titulo">Datas 02</h3>

<?php
    $formatoData01 = 'D, d \d\e  M \d\e Y';
    $formatoData02 = '%A, %d de %B de %Y';
    $formatoDataEHora = '%A, %d de %B de %Y - %H:%M:%S';

    $agora = new DateTime();
    // print_r($agora);

    echo $agora -> format($formatoData01) . '<br/>';
    
    setlocale(LC_TIME, 'pt-BR', 'pt_BR.utf-8');

    echo strftime($formatoData02, $agora -> getTimestamp()) . '<br/><br/>';

    $dataFixa = new DateTime('1975-01-25 15:30:50');
    echo strftime($formatoDataEHora, $dataFixa -> getTimestamp()) . '<br/><br/>';

    $amanha = new DateTime('+1 day');
    echo strftime($formatoData02, $amanha -> getTimestamp()) . '<br/><br/>';

    $amanha -> setDate(2000, 5, 20);
    echo strftime($formatoDataEHora, $amanha -> getTimestamp()) . '<br/><br/>';

    // Comparando datas
    $dataPassada = new DateTime('2000-05-17');
    $dataFutura = new DateTime('2030-11-26');
    $dataData = new DateTime('2030-11-26');

    // echo ($amanha > $dataPassada);
    echo ($amanha > $dataPassada) ? 'Maior' : 'Menor' . '<br/>';
    echo '<hr/>';

    $timeZone = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime(null, $timeZone);

    echo $agora -> format('d/M/Y H:i:s');