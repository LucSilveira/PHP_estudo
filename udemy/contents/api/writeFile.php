<h3 class="titulo">Escrever Arquivo</h3>

<?php
    // Função 'W' de escrita do documento
    $arquivo = fopen('arquivo.txt', 'w');
    fwrite($arquivo, "....................../´¯/\n....................,/¯../\n.................../..../\n............./´¯/'...'/´¯¯`·¸\n........../'/.../..../......./¨¯\n........('(...´...´.... ¯~/'...')\n.........\.................'...../\n..........''...\.......... _.·´\n............\..............(\n..............\.............\..\n");
    fclose($arquivo);

    // Sobrescrevendo arquivo
    $arquivo = fopen('arquivo.txt', 'w');
    fwrite($arquivo, "╔╗╔═╦╦╦═╗\n║╚╣║║║║╩╣\n╚═╩═╩═╩═♥");
    fclose($arquivo); 

    // Função 'a' de append - inserção de novos parametros no arquivo
    // $arquivo = fopen('arquivo.txt', 'a');
    // fwrite($arquivo, "\n╔╗╔═╦╦╦═╗\n║╚╣║║║║╩╣\n╚═╩═╩═╩═♥");
    // fclose($arquivo);

    // Função 'x' para criar um arquivo caso o mesmo n exista
    ini_set('display_errors', 1);
    $arquivo = fopen('arquivo.txt', 'x');
    fwrite($arquivo, "....................../´¯/\n....................,/¯../\n.................../..../\n............./´¯/'...'/´¯¯`·¸\n........../'/.../..../......./¨¯\n........('(...´...´.... ¯~/'...')\n.........\.................'...../\n..........''...\.......... _.·´\n............\..............(\n..............\.............\..\n");
    fclose($arquivo);
?>