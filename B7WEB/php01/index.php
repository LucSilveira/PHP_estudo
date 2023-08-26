<?php

/*                                        Variaveis                                            */
/*_____________________________________________________________________________________________*/

//Para declarar um váriavel é necessário colocar o elemento '$' antes do nome, ex.... '$nome'
//Sendo que a variavel não pode começas com numero, apenas string
$nome = "Lucas";
$sobrenome = "Silveira Portal";
$idade = 20;
$codando = true;
$variavelVazia = null;

/*                          Concatenação                     */
/*___________________________________________________________*/

//A concatenação de duas variáveis no PHP se da pelo '.'
$nomeCompleto = $nome . ' ' .$sobrenome;

//Ou também pelo uso de " " aglobando as váriaveis
$nomeCompleto02 = "$nome $sobrenome";

$meusDados = "$nomeCompleto tem $idade anos e no momento ele esta codando? $codando";

/*                              Arrays                                      */
/*__________________________________________________________________________*/

$conhecimentos = ['React Native', 'React', 'Asp.Net Core', 'Html', 'CSS'];

/*CUIDADO ESTÁ OPERAÇÃO SÓ REALIZA EM PHP 7.4 ADIANTE */
$habilidades = [
    ...$conhecimentos,
    'UX/UI'
];

//Para visualizar os elementos inteiros do array, utilizamos o 'print_r'
// print_r($habilidades)

$lucas = [
    "nome" => "Lucas",  
    "idade" => 20,
    "dados" => [
        "rg" => "Não te interessa",
        "beleza" => "além da sua compreensão"
    ],
    "tamanho" => '1,84',
    "peso" => 90
];
// print_r($lucas)
// echo $lucas['dados']['rg'] 


/*                      Condicionais                        */
/*__________________________________________________________*/

//Trabalhando com o If, If else
$idade02 = "oiiiiiiiiii";

if($idade02 >= 18){ //Nunca se utilizar '=>' porque ele é para atribuição dos dados 

    // echo 'Maior de idade';

}elseif($idade02 < 5){

    // echo 'Menor de idade';
}else{
    
    // echo 'eakljsbdua';
}

//Trabalhando com If ternário
// echo $idade02 >= 18 ? "Maior de idade" : "Menor de idade";

//Trabalhando com Switch
$tipo = "foto";
switch($tipo){
    case 'foto' : 
        // echo 'Exibindo foto....';
        break;

    case 'video' : 
        // echo 'Exibindo vídeo....';
        break;

    default :
        // echo 'Nenhuma opção';
        break;
}


/*                  Loops (Laços)                   */
/*_________________________________________________ */

// Usando o While (Enquanto)
$while = 5;

while($while > 0){

    // echo "Passou $while";

    $while--;
}

// Usando o laço For (Para)
for($i = 2; $i <= 5; $i++){
    // echo "Passou $i";
}

// Usando o Foreach (Para[for] cada[each])
$bolo = [
    'açucar',
    'leite',
    'ovo',
    'chocolate',
    'manteiga'
];

foreach($bolo as $ingredientes){ //detalhe que diferente de antes, especificamos a lista geral
                                 //e passamos o detalhe no singular
    // echo $ingredientes . "<br/>";
}

// Pegando o valor do indice
foreach($bolo as $indice => $ingredientes){
    // echo "<br/> Indice : " . ($indice + 1) . " - $ingredientes <br/>";
}

// Mesclando o Foreach com o html
// echo '<ul>';
foreach($bolo as $indice => $ingredientes){
    // echo "<li>$ingredientes</li>";
}
// echo '</ul>';


// Exercíciozin básico
$linhas = 0;
while($linhas <= 20){
    echo "<br/>";

    for($j = 0; $j < $linhas; $j++){
        echo '-';
    }

    $linhas++;
}
?>