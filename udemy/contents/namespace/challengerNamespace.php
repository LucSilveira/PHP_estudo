<?php namespace Context\Challenger; ?>

<h3 class="titulo">Desafio do Namespace</h3>

<?php
    require_once('challengerNamespace/People.php');
    require_once('challengerNamespace/User.php');

use Classe;
use Pessoa as ClassePessoa;
    use Usuario as ClasseUsuario;

    // Imprimindo dados de 'Pessoa'
    $pessoa01 = new ClassePessoa\Pessoa("Gustavo", 19);
    echo $pessoa01 -> SeApresentar();
    $pessoa01 = null;
    echo '<hr/><br/>';

    // Imprimindo dados de 'Usuario
    $usuario01 = new ClasseUsuario\Usuario("Lucas", 20, "lucax_sp");
    echo $usuario01 -> SeApresentar();
    $usuario01 = null;
?>