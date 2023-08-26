<h3 class="titulo">Desafio da Tabela 2.0</h3>

<form action="#" method="post">
    <div class="campo">
        <label for="linhas">Linhas :</label>
        <input type="number" name="linhas" placeholder="Quantas linhas deseja?"/>
    </div>
    <div class="campo">
        <label for="colunas">Colunas :</label>
        <input type="number" name="colunas" placeholder="Quantas colunas deseja?"/>
    </div>
    <button>Renderizar</button>
</form>

<?php
    $linhas = $_POST['linhas'] ?? 0;
    $colunas = $_POST['colunas'] ?? 0;
    $valor = 1;

    echo '<br/><hr/>'
?>

<table>
    <thead>Tabela renderizada : </thead>
    <tbody>
        <?php
            for($i = $linhas; $i > 0; $i--)
            {
                echo "<tr>";
                
                for($j = $colunas; $j > 0; $j--)
                {
                    $estilo = $valor % 2 === 0 ? 'coluna_estilizada' : '';

                    echo "<td  class=$estilo>$valor</td>";
                    $valor++;
                }
                echo '</tr>';
            }
        ?>
    </tbody>
</table>

<style>
    div.campo{
        display: flex;
        flex-direction: column;
        margin: 0.5em;
    }

    form{
        display: flex;
        align-items: flex-end;
    }

    input{
        width: 15vw;
        padding: 0.25em;
        font-size: 1rem;
    }

    button{
        margin: 0.5em;
        font-size: 1.2rem;
        padding: 0.15em 1em;
        border-radius: 6px;
        background-color: #4CAF50;
        color: white;
    }
    
    button:hover{
        background-color: #44a047;
        color: #fff;
    }

    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr{
        border: 1px solid #444;
    }
    
    table td{
        text-align: center;
        padding: 15px 25px;
        border: 1px solid #444;
    }

    table * .coluna_estilizada{
        background-color: #cdcdcd;
    }
</style>