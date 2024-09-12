<?php
/* movidos para um arquivo só para funções
function exibeMensagemLancamento(int $ano): void{

    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }

}

function incluidoNoPlano(bool $planoPrime , int $anoLancamento): bool{
    return $planoPrime || $anoLancamento < 2020;
}
*/
require __DIR__ . "/funcoes.php"; #dir traz o path absoluto

echo "Bem-vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime,$anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];


echo $filme["ano"];

/*
#demonstração da função sort que ordena arrays
var_dump($notas);
sort($notas);
var_dump($notas);

#busca pelo menor valor
echo min($notas);
#ou
$menorNota = min($notas);
var_dump($menorNota);

#demonstração de manipulação de strings
var_dump($filme['nome']);
var_dump(strpos($filme['nome'],':')); #busca posição dentro da string
$posicaoDoisPontos = strpos($filme['nome'],':');
var_dump(substr($filme['nome'], 0, $posicaoDoisPontos)); #busca substring
*/