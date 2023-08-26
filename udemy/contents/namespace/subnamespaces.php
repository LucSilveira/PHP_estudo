<?php namespace App; ?>

<h3 class="titulo">Sub-namespace</h3>

<?php
    echo __NAMESPACE__ . '<br/><br/>';

    const constante = 123;
    echo constante . '<br/>';

    namespace App\Principal;
    echo '<hr/>';
    echo __NAMESPACE__ . '<br/><br/>';
    const constante = 234;
    
    namespace App\Principal\Especifico;
    echo '<hr/>';
    echo __NAMESPACE__ . '<br/><br/>';
    const constante = 345;

    echo constante . '<br/>';
    echo constant('\\' . __NAMESPACE__ . '\constante') . '<br/>';

    echo \App\constante . '<br/>';
    echo \App\Principal\constante . '<br/>';
    echo \App\Principal\Especifico\constante . '<br/>';
?>