<?php

// Chamando outros arquivos dentro do que estou usando
require('header.php');
require('config.php');
/* DETALHE - quando se instancia um elemento cujo não exista, dá erro na aplicação */

// Instânciando outros conectores com o 'include'
include('asjd.php');
/* DETALHE - quando se instancia um elemento cujo não exista,
                    ele informa o erro mas n para a aplicação */

// Instanciando apenas uma unica vez um elemento sem o repetir
require_once('header.php');

echo 'Restante do site... <br/>';
echo 'Nome de usuário ' . $usuario;

?>