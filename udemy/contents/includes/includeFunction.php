<h3 class="titulo">Include de função</h3>

<?php
    echo 'Carregando... include_function' . '<br/>';

    function Carregando_arquivo()
    {
        include('file/includeFile.php');

        echo $variavel . '<br/>';
        echo Soma(2, 5) . '<br/>';
    }

    echo "Novamente no arquivo : include_function" . '<br/>';
    // echo Soma(1, 8) . '<br/>';
    Carregando_arquivo();
?>