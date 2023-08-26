<h3 class="titulo">$_GET</h3>

<?php
    echo($_GET);
    echo '<br/>';

    print_r($_GET);
    echo '<br/>' . $_GET['nome'];

    print_r(($_GET));
    echo '<br/>' . $_GET['opa'];

    $_GET[] = [
        "dados" => "setados na mão"
    ];
    print_r($_GET);
?>