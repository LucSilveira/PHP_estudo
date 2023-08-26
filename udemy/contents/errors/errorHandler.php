<h3 class="titulo">Error Handler</h3>

<?php
    // Liberando as mensagens de erros - mesmo com os alerts e fatais
    ini_set('display_errors', 1);
    // echo 7 / 0;

    // Mostrando o resultado do erro sem mostrar os alerts;
    error_reporting(E_ERROR);
    // echo 4 / 0;

    // Mostrando o resultado do erro com as notificações
    error_reporting(E_ALL);
    echo 8 / 0;
    echo '<hr/>';

    error_reporting(E_ALL);
    echo 6 / 0;
    include ('errou_o_arquivo.php');

    function FiltrandoMensagem($errno, $errstring)
    {
        $text = 'include';
        // $text = 'by zero';
        return !!stripos(" $errstring", $text);
    }

    set_error_handler('filtrandoMensagem', E_WARNING);
    
    echo '<hr/><br/>';
    
    error_reporting(E_ALL);
    echo 6 / 0;
    include ('errou_o_arquivo.php');

    echo '<hr/><br/>';

    restore_error_handler();

    error_reporting(E_ALL);
    echo 6 / 0;
    include ('errou_o_arquivo.php');
?>