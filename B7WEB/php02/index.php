<?php

/*                          Funções                     */
/*______________________________________________________*/

//Criando uma função para trazer os números subsequentes de um número
function subsequente(){

    for($sub = 0; $sub < 10; $sub++)
    {
        echo $sub . "<br/>";
    }

    echo "<hr/>";
}
subsequente();

// Função pra calcular 2 números
function Calcular($n1, $n2){
    $total = $n1 + $n2;
    return $total;
}

echo Calcular(5, 6);
echo '<hr/>';

// Passando variavel de referencia '&' - passando uma váriavel para a função, para que possa ser alterado o valor
//                                       dela intenamente dentro da própria função,
//                                       e externamente onde ela foi criada

function Multiplicar($base, $multiplicador, &$valor){

    $valor = $base * $multiplicador;
}

$numero01 = 2;
$numero02 = 5;

$multiplicacao = 0;

Multiplicar($numero01, $numero02, $multiplicacao);

echo "$multiplicacao";
echo '<hr/>';

/** Exemplo clássico de variável por referência : */
// Um grande exemplo desta ferramenta é o método 'sort' onde ele ordena o array informado

///             então ele recebe o array, ordena e altera o valor dele



/*                              Função Anonima                                */
/*____________________________________________________________________________*/

$dizimo = function(int $numero) {

    return $numero * 0.1; 
};

$funcaoAnonima = $dizimo;

echo $funcaoAnonima(50);
echo '<hr/>';


// Utilizando outra forma de função anonima por meio de arrow function e a tag 'fn'
$juros = fn($preco) =>  $preco * 0.1; 

echo $juros(120);
echo '<hr/>';

// Utilizando função recursiva, onde ela mesmo se chama até chegar a um valor especifico
function recursividade($numero03){
    $resultado = $numero03 / 2;
    
    echo $resultado . "<br/>";

    if(round($resultado) > 0){ //Round é um arredondador de valores
        recursividade($resultado);
    }
}

recursividade(100);
echo '<hr/>';

/*                          Função nativas                              */
/*______________________________________________________________________*/

// Pegar o valor do PI
echo pi(); 
echo '<hr/>';

// Arredondando um valor para o menor possível - 'floor'
$arredondar = 2.5846782;

echo floor($arredondar);
echo '<hr/>';

// Arredondando um valor para o maior possível - 'ceil'
$arredondar02 = 2.747625896;

echo ceil($arredondar02);
echo '<hr/>';


// Arredondar com casas decimais - 'round'
$arredondar03 = 2.5958;

echo round($arredondar03, 3);
echo '<hr/>';

// Gerando valores aleatorios - 'rand'
$random = rand(3, 9);

echo $random;
echo '<hr/>';

// Pegando maior valor de uma lista - 'max'
$valores = [1, 2, 3, 4, 5];

echo "Maior valor " . max($valores);

echo '<br/><br/>';

// Pegando o menos valor de uma lista - 'min'
echo "Menor valor " . min($valores);

echo '<hr/>';

// Removendo espaços de uma palavra - 'trim'
$semEspaços = "Lucas Silveira Portal";

echo trim($semEspaços) . "<br/>";

// Para achar o tamanho de uma string, pode-se utilizar o 'strlen'
echo strlen($semEspaços);
echo '<hr/>';

// Para colocar todos os elementos da string em minusculos - 'strtolower'
echo strtolower($semEspaços) . '<br/>';

// Para colocar todos os elementos da string em maiusculo - 'strtoupper'
echo strtoupper($semEspaços) . '<hr/>';

// Para colocar somente as primeiras letras em maiusculo - 'ucwords'
echo ucwords($semEspaços) . '<hr/>';

// Substituir uma palavra especifica - 'str_replace'
echo str_replace('Lucas', 'Lucao', $semEspaços);
echo '<br/>';

// Deletar caracteres de uma palavra - 'substr'
echo substr($semEspaços, 2, 4);
echo '<hr/>';

// Procurar palavras ou caracteres especificos dentro de uma string - 'strpos'

echo strpos($semEspaços, 'Lucas'); // retorna verdadeiro ou falso
echo '<hr/>';

// Quebra a palavra de acordo com um caracter informado - 'explode'
$arrayPalavras = explode(' ', $semEspaços);

print_r($arrayPalavras);
echo '<hr />';

// Mascarando numeros - 'number_format'
$mascara = 12548.65;

echo 'R$ : ' . number_format($mascara, 2, ',', '.');
echo '<hr />';

/***** Funções para listas  *****/
echo '<br/><br/>';

// Trazendo a diferença de elementos em duas listas - 'array_diff'
$lista01 = ['Ana', 'Paulo', 'Carlos', 'André', 'Milena', 'Bianca', 'Jessica'];
$lista02 = ['Paulo', 'Carlos', 'Milena', 'Bianca'];

print_r(array_diff($lista01, $lista02));
echo '<hr />';

// Filtrando palavras dentro de uma lista - 'array_filter'
$arrayNumeros =[1, 15, 48, 59, 62];

$filtro = array_filter($arrayNumeros, function($item){
    if($item < 50){
        return true;
    }else{
        return false;
    }
});

print_r($filtro);
echo '<hr/>';

// Mapeando um array - 'array_map'

$map = array_map(function($item){
    return $item * 2;
}, $arrayNumeros);

print_r($map);
echo '<hr/>';

// Contando a quantidade de itens do array - 'count'

echo count($arrayNumeros);
echo '<hr/>';

// Removendo o último elemento de um array - 'array_pop'

$item = ['item1', 'item2', 'item3', 'item4', 'item5'];

// array_pop($item);
print_r($item);
echo '<hr/>';

// Removendo o primeiro elemento de um array - 'array_shift'

// array_shift($item);
print_r($item);

echo '<hr/>';

// Procurando se existe um elemento dentro da sua lista - 'in_array'

echo in_array('item4', $item);
echo '<hr/>';

// Procurando se existe um elemento dentro de uma lista e em qual posição ela se encontra - 'array_search'

echo array_search('item3', $item);
echo '<hr/>';

// Ordenando o array em ordem crescente - 'sort'

sort($arrayNumeros);
print_r($arrayNumeros);

echo '<hr/>';

// Ordenando um array em ordem descrescente - 'rsort'

rsort($arrayNumeros);
print_r($arrayNumeros);

echo '<hr/>';

// Juntando os valores de um array em um único elemento - 'inplode'

$comEspacos = ['Lucas', 'Silveira', 'Portal'];

echo implode(' ',  $comEspacos);
echo '<hr/>';

// Gerando valores de indice aleatórios - 'array_rand'
$aleatorio = [1, 2, 3, 4, 5, 6];

echo array_rand($aleatorio);
echo '<hr/>';

// Removendo valores de um array - 'unset'
unset($aleatorio);
var_dump($aleatorio);   

// Meclando dois arrays distintos - 'array_merge'
$array01 = [2, 4, 6, 8, 10];

$array02 = [1, 3, 5, 7, 9];

echo array_merge($array01, $array02);
echo '<hr/>';

/***** Funções para data  *****/

// Pegando a data de hoje - 'date'

echo date('d/M/y H:i:s');
echo '<hr/>';
/* Link com os elementos de data - https://www.php.net/manual/pt_BR/function.date.php */

// Convertendo a data do padrão universal para o padrão brasileiro

$data = '2021-07-22';
echo date('d / M / y', strtotime($data));

?>