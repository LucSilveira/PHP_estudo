<h3 class="titulo">Desafio imagem</h3>

<?php
    session_start();

    $arquivosEnviados = $_SESSION['arquivos'] ?? [];

    if($_FILES && $_FILES['arquivo'])
    {
        $folderUpload = __DIR__ . '/../../wwwRoot/ChallengerImage/';
        $nameFile = $_FILES['arquivo']['name'];

        $arquivo = $folderUpload . $nameFile;
        $temporaryFile = $_FILES['arquivo']['tmp_name'];

        if($nameFile == '' || $nameFile == null){
            
            echo '<p class="error">Nenhum arquivo enviado</p>';
            echo '<br/>';

        }else if(strpos($nameFile, '.png') || strpos($nameFile, '.jpeg') || strpos($nameFile, '.jpg')){
            
            if(move_uploaded_file($temporaryFile, $arquivo))
            {
                echo '<p>Arquivo válido e movido com sucesso.</p>';
                
                $arquivosEnviados[] = $nameFile;
                $_SESSION['arquivos'] = $arquivosEnviados;
            }else{
                
                echo '<p class="error">Erro no upload do arquivo!</p>';
            }
            echo '<br/>';
        }else{

            echo '<p class="error">Tipo de arquivo não suportado</p>';
        }
    }
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>
<hr/>
<ul>
    <h4>Arquivos enviados :</h4>
    <?php foreach($_SESSION['arquivos'] as $arquivo) : ?>
        <li>
            - <a href="../../udemy/wwwRoot/ChallengerImage/<?= $arquivo ?>"><?= $arquivo ?></a>
            <img src="../../udemy/wwwRoot/ChallengerImage/<?= $arquivo ?>" alt="Imagem enviada">
        </li>
    <?php endforeach ?>
</ul>

<style>
    input, button{
        font-size: 1.2rem;
    }

    form{
        display: flex;
        flex-direction: column;
    }

    p{
        font-size: 1em;
        color : #13b119;
        font-weight: 400;
        padding: 0.5em;
    }

    p.error{
        color : #e41203;
    }

    hr, h4{
        margin: 0.5em 0;
    }

    ul{
        padding: 1em;
        list-style: none;
    }

    img{
        width: 8vw;
        height: 10vh;
    }
</style>