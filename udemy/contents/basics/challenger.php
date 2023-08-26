<h3 class="titulo">Desafio</h3>

<?php
    $result = 8 + 8;
?>

<ul list>
    <li>1 + 1 = <?php echo 1 + 1; ?></li>
    <li>4 + 4 = <?= 4 + 4 ?></li>
    <li>8 + 8 = <?= $result?></li>
</ul>

<style>
    [list]{
        list-style-type: none;
    }
</style>