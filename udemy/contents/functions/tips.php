<h3 class="titulo">Declarando tipos</h3>

<?php
    function Somando($a, $b)
    {
        echo "<span>Somando $a + $b : </span>";
        return $a + $b;
    }

    echo Somando(1, 2) . '<br/>';
    echo Somando(11, 9) . '<br/>';
    echo Somando(1, '4zero') . '<br/>';
    echo '<hr/><br/>';
    
    function Somando02(int $a, int $b)
    {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }
    
    echo Somando02(1, 2) . '<br/>';
    echo Somando02(1.4, 2.6) . '<br/>';
    echo Somando02(1, '4zero') . '<br/>';
    echo '<hr/><br/>';
    
    function Somando03($a, $b) : int
    {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }
    
    echo Somando03(1, 2) . '<br/>';
    echo Somando03(1.4, 2.6) . '<br/>';
    echo Somando03(1, '4zero') . '<br/>';
?>  