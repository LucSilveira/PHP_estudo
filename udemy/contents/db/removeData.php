<h3 class="titulo">Excluir registro</h3>

<form action="#" method="post">
    <div class="campo">
        <label for="indice">Indice :</label>
        <input type="number" name="indice" placeholder="Qual indice deseja remover?"/>
    </div>
    <button>Remover</button>
</form>

<?PHP
    require_once('context.php');

    $context = novaConexao();

    if($_POST['indice']){

        $indice = $_POST['indice'];

        $sql = "DELETE FROM Cadastro WHERE id = $indice";

        $resultExclusao = $context -> query($sql);

        

        if($resultExclusao)
        {
            echo 'Dado excluido com sucesso';

        }else{

            echo 'Erro : ' . $context -> error;
        }
    }

    $sql = "SELECT id, nome, nascimento, email FROM Cadastro";
    $result = $context -> query($sql);
    $registros = [];

    if($result -> num_rows > 0)
    {
        while($row = $result -> fetch_assoc())
        {
            $registros[] = $row;
        }
        
    }else if($context -> error){

        echo 'Erro : ' . $context -> error;
    }
?>

<table class="table">
    <thead>
        <th>Indice</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Email</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) : ?>
            <tr>
                <td><?= $registro['id'] . '-' ?></td>   
                <td><?= $registro['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><?= $registro['email'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table{
        border-collapse: collapse;
        margin-top: 2em;
    }

    tbody tr{
        line-height: 2em;
        border-bottom: 1px solid black;
    }

    thead tr{
       background-color: #b3b3b3;
    }

    td{
        column-width: 2em;
        padding: 0.25em;
    }

    form div.campo{
        display: flex;
        flex-direction: column;
        margin: 0.5em;
    }

    input{
        width: 15vw;
    }
</style>