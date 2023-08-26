<h3 class="titulo">Consultando dados</h3>

<?php
    require_once('context.php');

    $sql = "SELECT id, nome, nascimento, email FROM Cadastro";

    $context = novaConexao();
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

    // print_r($registros);

    $context -> close();
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
</style>