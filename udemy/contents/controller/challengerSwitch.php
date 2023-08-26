<h3 class="titulo">Desafio switch</h3>

<form action="#" method="post">
    <input type="texte" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km para Milha</option>
        <option value="milha-km">Milha para Km</option>
        <option value="km-metro">Km para metro</option>
        <option value="metro-km">Metro para Km</option>
        <option value="celsius-fahrenheit">Celsius para Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit para Celsius</option>
    </select>
    <button>Converter</button>
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
    $valor = $_POST['param'] ?? 0;
    $conversao = $_POST['conversao'] ?? "";

    // Valores de conversao
    const FATOR_KM_MILHA = 1.609;
    const FATOR_METRO_KM = 1000;
    const FATOR_CEL_FAR = 1.8;

    switch($conversao){
        case "km-milha":
            $valor = $valor / FATOR_KM_MILHA;
            echo round($valor, 2) . ' mi';
            break;
        case "milha-km" :
            $valor = $valor * FATOR_KM_MILHA;
            echo round($valor, 2) . '  km';
            break;
        case "km-metro" :
            $valor = $valor * FATOR_METRO_KM;
            echo $valor . ' m';
            break;
        case "metro-km" :
            $valor = $valor / FATOR_METRO_KM;
            echo $valor . 'km';
            break;
        case "celsius-fahrenheit" :
            $valor = ($valor * FATOR_CEL_FAR) + 32;
            echo $valor . ' Fº';
            break;
        case "fahrenheit-celsius" :
            $valor = ($valor - 32) / FATOR_CEL_FAR;
            echo round($valor, 2) . ' Cº';
            break;
        default :
            echo 'Conversão não definida';
            break;
    }
?>