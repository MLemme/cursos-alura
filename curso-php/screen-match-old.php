<?php

echo "Bem-vindo(a) ao screen match!
";

#echo "pula linha \n";

#echo "é \t tabulação";

$nomeFilme = "Top Gun - Maverick";
#$nomeFilme = "Thor: Ragnarok";
#$nomeFilme = "Se beber não case";
#$anoLancamento = 2022;

//$argv Variavel que recebe todas as entradas do terminal, e se forem diversos parametros eles vem em array, sendo a posição 0 o nome do arquivo fonte
//?? operador de coalecência nula, se o que está é nulo, ele utiliza o valor a direita
#$anoLancamento = $argv[1] ?? 2022; 
$anoLancamento = 2022; 

$somaDeNotas = 0;
$notas = [];

#$somaDeNotas = (9 + 6 + 8 + 7.5);

/*$somaDeNotas = 9;
$somaDeNotas = $somaDeNotas + 6;
$somaDeNotas = $somaDeNotas + 8;
$somaDeNotas = $somaDeNotas + 7.5;
$somaDeNotas = $somaDeNotas + 5;*/

/*$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;*/

//$notaFilme = $somaDeNotas / 5;

$quantidadeDeNotas = $argc - 1;

for ($contador = 1; $contador <= $quantidadeDeNotas; $contador++) {
    //$somaDeNotas += $argv[$contador];
    //$notas[$contador - 1] += (float)$argv[$contador]; //type cast para float
    // se quer adiconar um item em um arrat vazio, sempre ao final, não precisa indicar o indice
    $notas[] += (float)$argv[$contador];
}

/*for ($i=0; $i < count($notas); $i++) { 
    $somaDeNotas += $notas[$i];
}

var_dump($notas);*/
/*
//loops para elementos indexados
foreach ($notas as $nota) {
    $somaDeNotas += $nota;
}*/

/*$quantidadeDeNotas = $argc - 2;

$contador = 1;

while ($argv[$contador] != 0) {
    $somaDeNotas += $argv[$contador++];
}*/
/*
do {
    # code...
} while ($a <= 10);
*/
//$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$notaFilme = array_sum($notas) / $quantidadeDeNotas; //função de array que já soma os elementos 

$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

$incluidoNoPlano = $planoPrime && $anoLancamento < 2020;

//echo $nomeFilme ;
//echo $notaFilme;

/*echo "Nome do filme: ";
/echo $nomeFilme;
echo "\n";
echo "Nota do filme: ";
echo $notaFilme;*/

//echo "operador de concatenação";
//echo "Nome do filme: " . $nomeFilme;
//echo "interpolação";
echo "Nome do filme: " . $nomeFilme . "\n";

#echo "aspas duplas a string é interpretada permitindo uso de caracteres de escape";
#echo "aspas simples mostra apenas o texto, ambos podem ser combinados";

#echo 'Texto' . "\n";

echo "Nota do filme: $notaFilme\n";

echo "Ano de lançamento: $anoLancamento\n";


if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento\n";
}elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo\n";
}
else {
    echo "Esse filme não é um lançamento\n";
}

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecio",
};

echo "O gênero do filme é $genero\n";

//$argc contém o número/quantidade de parâmetros recebidos do terminal
//echo $argc . " " . $argv[0];

//var_dump($argv); 
//exibir na tela os valores e o tipo da variável passada
/*
$notasParaOFilme = [
    10,
    8,
    9,
    7.5,
    5,
    6.8
];
*/
/*ou 

$notasParaOFilme = array(
    10,
    8,
    9,
    7.5,
    5,
    6.8
);
*/
/*
var_dump($notasParaOFilme);

//Dicionário ou Array Associatiavo

$filme = [
    'nome' => "Thor: Ragnarok",
    'ano' => 2021,
    'nota' => 7.8,
    'genero' => "super-herói",
];

echo $filme['nome'];

*/