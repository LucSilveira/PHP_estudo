<h3 class="titulo">Lendo arquivos</h3>

<?php
    // Função 'r' de leitura de arquivos
    $arquivo = fopen('arquivo.txt', 'r');
    echo fread($arquivo, 10); // Lendo o arquivo pela quantidade de bytes
    fclose($arquivo);

    echo '<hr/><br/>';

    $arquivo = fopen('arquivo.txt', 'r');
    echo fread($arquivo,filesize('arquivo.txt')); // Lendo arquivo pelo tamanha que ele possui
    fclose($arquivo);
    
    echo '<hr/><br/>';
    
    $arquivo = fopen('arquivo.txt', 'r');
    echo fgets($arquivo) . '<br/>'; // Lendo linha por linha do arquivo manualmente
    echo fgets($arquivo) . '<br/>'; // Lendo linha por linha do arquivo manualmente
    echo fgets($arquivo) . '<br/>'; // Lendo linha por linha do arquivo manualmente
    fclose($arquivo);
    
    echo '<hr/><br/>';
    
    $arquivo = fopen('arquivo.txt', 'r');
    while(!feof($arquivo)) // Percorrendo o arquivo até a ultima linha
    {
        echo fgets($arquivo) . '<br/>';
    }
    fclose($arquivo);
    
    echo '<hr/><br/>';
    
    // $arquivo = fopen('arquivo.txt', 'r');
    // while(!feof($arquivo)) // Percorrendo o arquivo até a ultima linha letra por letra
    // {
    //     echo fgetc($arquivo) . '<br/>';
    // }
    // fclose($arquivo);
    
    echo '<hr/><br/>';
    
    $arquivo = fopen('arquivo.txt', 'r+'); // Lendo e alterando o arquivo ao mesmo tempo
    echo fgets($arquivo) . '<br/>';
    echo fgets($arquivo) . '<br/>';
    echo fgets($arquivo) . '<br/>';

    fwrite($arquivo, "\nAdicionando conteúdo na leitura do mesmo");
    fclose($arquivo);
?>