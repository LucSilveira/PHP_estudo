<h3 class="titulo">Map & Filter</h3>

<?php
    $notas = [5.8, 7.3, 9.8, 6.7, 4.5];
    $notasFinais1 = [];

    foreach($notas as $nota)
    {
        $notasFinais1[] = round($nota);
    }
    
    print_r($notasFinais1);
    echo '<br/><br/>';
    
    $notasFinais2 = array_map(round, $notas);
    print_r($notasFinais2);
    echo '<br/>';
    
    $aprovados = [];
    
    foreach($notas as $nota)
    {
        if($nota > 7)
        {
            $aprovados[] = $nota;
            
        }
    }
    print_r($aprovados);
    echo '<br/><br/>';

    function FiltrandoAprovados($nota)
    {
        return $nota >= 7;
    }

    $aprovados2 = array_filter($notas, FiltrandoAprovados);
    print_r($aprovados2);
?>