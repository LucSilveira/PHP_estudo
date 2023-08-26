<h3 class="titulo">Download de arquivos</h3>

<?php
    echo "<p>Aproveitando os arquivos eviados via exemplo anterior";
    echo "<a class='link' href='../exercices/exercise.php?dir=../contents/api&file=uploadFile'>...consulte aqui</a></p>";
    echo '<br/>';
    print_r($_SESSION['arquivos']);
    echo '<br/><br/>';
?>

<style>
    p{
        margin-top: 1em;
    }

    p > a{
        text-decoration: none;
        color : #9c27b0;
        width: 10vw;
        height: 6vh;
        cursor: pointer;
        padding: 0.4em 0.8em;
        transition: 0.10ms;
    }

    p > a:hover{
        background-color: #9c27b0;
        color: #fff;
    }
</style>

<ul>
    <?php foreach($_SESSION['arquivos'] as $arquivo) : ?>
        <li>
            <a href="../../udemy/wwwRoot/Pictures/<?= $arquivo ?>"><?= $arquivo ?></a>
        </li>
    <?php endforeach ?>
</ul>