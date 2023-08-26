<h3 class="titulo">Include Once</h3>

<?php
    ini_set('display_errors', 1);

    include_once('once/includeOnceFile.php');
    // require('once/includeOnceFile.php');
    
    echo "Variável = $variavel." . '<br/>';
    $variavel = "Variável alterada";
    echo "Variável = $variavel." . '<br/><br/>';
    
    include('once/includeOnceFile.php');
    echo "Variável = $variavel." . '<br/>';
?>