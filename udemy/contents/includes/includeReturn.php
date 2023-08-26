<h3 class="titulo">Include & Return</h3>

<?php
    $valorRetorno = require("{$_GET['dir']}/return/includeReturned.php");
    echo $valorRetorno . '<br/>';
    echo $variavelRetornada . '<br/><br/>';

    $valorRetorno02 = require(__DIR__ . "/return/includeNotReturned.php");
    echo $valorRetorno02 . '<br/>';
    echo $variavelDeclarada; 
?>