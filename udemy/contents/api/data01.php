<h3 class="titulo">Datas</h3>

<?php
    echo time() . '<br/>';

    echo date('D, d, \d\e  M \d\e Y, H:i') . '<br/>';

    // Colocando a data através da strftime
    echo strftime('%A, %d de %m de %Y', time()) . '<br/>';
    echo '<hr/><br/>';
    
    // Define a linguagem para pt-br
    setlocale(LC_TIME, 'pt-BR', 'pt_BR.utf-8');

    echo strftime('%A, %d de %m de %Y', time()) . '<br/><br/>';

    echo 'Dia de amanhã' . '<br/>';
    
    $amanha = time() + (24 * 60 * 60);
    echo strftime('%A, %d de %m de %Y', $amanha) . '<br/><br/>';

    echo 'Próxima semana' . '<br/>';
    
    $proximaSemana = strtotime('+1 week');
    echo strftime('%A, %d de %m de %Y', $proximaSemana) . '<br/><br/>';
    
    echo 'Data exata' . '<br/>';
    
    $dataFixa = mktime(15, 30, 50, 1, 25, 2021);
    echo strftime('%A, %d de %m de %Y - %H:%M:%S', $dataFixa) . '<br/>';
    
?>