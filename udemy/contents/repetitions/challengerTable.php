<h3 class="titulo">Desafio Tabela</h3>

<?php
    $matrix = [
        ['01', '02', '03', '04', '05'],
        ['06', '07', '08', '09', '10'],
        ['11', '12', '13', '14', '15'],
        ['16', '17', '18', '19', '20'],
    ];
    echo '<br/>';

    foreach($matrix as $linha)
    {
        foreach($linha as $valor)
        {
            echo $valor . ' ';
        }
        echo '<br/>';
    }
    echo '<hr/><br/>';
    ?>

<table>
    <thead>Primeira tabela - apenas os elementos</thead>
    <tbody>
        <?php
            foreach($matrix as $linha)
            {
                echo '<tr>';
                foreach($linha as $indice => $coluna)
                {
                    echo "<td>$linha[$indice]</td>";
                }
                echo '</td>';
            }
            ?>
    </tbody>
</table>
<br/>
<table>
    <thead>Segunda tabela - estilizada</thead>
    <tbody>
        <?php
            for($i = 0; $i < count($matrix); $i++)
            {
                $estilo = $i % 2 !== 0 ? 'linha_estilizada' : '';
                echo "<tr class=$estilo>";
                
                for($j = 0; $j < count($matrix[$i]); $j++)
                {
                    echo "<td>{$matrix[$i][$j]}</td>";
                    
                }
                echo '</tr>';
            }
        ?>
    </tbody>
</table>

<style>
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr{
        border: 1px solid #444;
    }
    
    table td{
        padding: 20px;
        border: 1px solid #444;
    }

    table * .linha_estilizada{
        background-color: #cdcdcd;
    }
</style>