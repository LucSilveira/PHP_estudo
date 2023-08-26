<h3 class="titulo">$_POST</h3>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="nome...">
    <input type="text" name="sobrenome" placeholder="sobrenome...">
    <button>Enviar</button>
</form>

<style>
    form > *{
        font-size: 1.5rem;
    }
</style>

<?php
    print_r($_POST);
?>