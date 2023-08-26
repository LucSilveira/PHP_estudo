<h3 class="titulo">Desafio da classe Data</h3>

<?php
    class Data
    {
        public int $dia;
        public int $mes;
        public int $ano;

        public function ConverterParaData()
        {
            return "Data convertida : {$this->dia}/{$this->mes}/{$this->ano}";
        }
    }

    // Criando objeto data
    $data01 = new Data();
    $data01 -> dia = 8;
    $data01 -> mes = 5;
    $data01 -> ano = 2021;
    echo $data01 -> ConverterParaData();
?>