<h3 class="titulo">Include</h3>

<?php
    echo "Executei essa linha no arquivo 'include'" . '<br/>';

    include('file/includeFile.php');
    // include('includeFile.php');

    echo Soma (3, 8) . '<br/>';
    echo $globalVar;
?>