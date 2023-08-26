<h3 class="titulo">Excluir registro 2.0</h3>

<?PHP
    require_once('context.php');

    $context = novaConexao();

    if($_GET['excluir']){

        $indice = $_GET['excluir'];

        $sql = "DELETE FROM Cadastro WHERE id = $indice";

        $resultExclusao = $context -> prepare($sql);
        $resultExclusao -> bind_param('i',$_GET['excluir']);
        $resultExclusao -> execute();

        if(!$resultExclusao){
            
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

<table class="table table-hover">
    <thead>
        <th>Indice</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>Email</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) : ?>
            <tr>
                <td><?= $registro['id'] . '-' ?></td>   
                <td><?= $registro['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($registro['nascimento'])) ?></td>
                <td><?= $registro['email'] ?></td>
                <td><a href="/udemy/exercices/exercise.php?dir=../contents/db&file=removeData02&excluir=<?= $registro['id'] ?>">Excluir</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table{
        border-collapse: collapse;
        margin-top: 2em;
        width: 80%;
        margin: 2em auto;
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

    a{
        text-decoration: none;
        margin: 0.5em;
        font-size: 0.8rem;
        padding: 0.15em 1em;
        border-radius: 4px;
        background-color: #f75050;
        color: white;
    }
    
    a:hover{
        background-color: red;
        color: #fff;
    }
</style>