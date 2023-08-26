<h3 class="titulo">Upload file</h3>

<?php
    print_r($_FILES);

    session_start();

    $arquivosEnviados = $_SESSION['arquivos'] ?? [];

    if($_FILES && $_FILES['arquivo'])
    {
        $folderUpload = __DIR__ . '/../../wwwRoot/Pictures/';
        $nameFile = $_FILES['arquivo']['name'];

        $arquivo = $folderUpload . $nameFile;
        $temporaryFile = $_FILES['arquivo']['tmp_name'];

        echo '<br/>';
        if(move_uploaded_file($temporaryFile, $arquivo))
        {
            echo '<p>Arquivo válido e movido com sucesso.</p>';

            $arquivosEnviados[] = $nameFile;
            $_SESSION['arquivos'] = $arquivosEnviados;
        }else{

            echo '<p class="error">Erro no upload do arquivo!</p>';
        }
        echo '<br/>';
    }
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

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
        padding: 1em 0.5em;
    }

    p.error{
        color : #e41203;
    }
</style>