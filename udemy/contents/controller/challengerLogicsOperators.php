<h3 class="titulo">Desafio de operadores lógicos</h3>

<!--
    Dois trabalhos - Terça e Quinta
    - Se os dois forem executados -> TV 50' e Sorvete
    - Se apenas um for executado -> TV 32' e Sorvete
    - Se nenhum for executado -> Fica em casa que é mais saudável
-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 - (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 - (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button{
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

    select{
        width: 15vw;
        padding: 0.25em;
        font-size: 1rem;
        margin-bottom: 0.5em;
    }
</style>

<?php
    if($_POST['t1'] || $_POST['t2']){

        if($_POST['t1'] == '1' && $_POST['t2'] == '1'){
            echo "Parabéns! Você ganhou uma TV de 50' e um sovetinho top";
    
        }else if(!!$_POST['t1'] xor !!$_POST['t2']){
            echo "Parabéns! Você ganhou uma TV de 32' e um sorvetinho top";
    
        }else{
            echo 'Fica em casa que é mais saudável';
        }
    }
?>