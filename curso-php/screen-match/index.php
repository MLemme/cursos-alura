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
#inclusão da nova classe
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php"; #dir traz o path absoluto

#include é igual ao require no entanto não causa o erro fatal, não interrompe

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

/*$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];*/

$filme = criaFilme(
    nome: "Thor: Ragnarok",
    anoLancamento: 2021, 
    nota: 7.8, 
    genero: "super-herói"
);
#php permite nomear os parametros a partir das variaveis que foram criadas, impossibilitando assim falhas por parâmetros em ordem diferente da estrutura da função
//Acesso quando retorno é um array associativo
#echo $filme["ano"];
//Acesso quando retorno é uma classe
echo $filme->anoDeLancamento;

//Tratamento de arquivos json
#filmeComoStringJson = json_encode($filme);
#função que encapsula todos os processos com arquivos para escrita, passando local e nome do arquivo e conteudo string
#file_put_contents(__DIR__ . '\filme.json',$filmeComoStringJson);

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
/*
echo json_encode($filme); #transforma uma variavel ou valor do php para o formato json

var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}',true)); #esta função faz o caminho reverso da primiera e o segundo parametro garante que o retorno seja em formato de array associativo, ou dicionario de dados, a entrada é melhor com '' pois as "" do dado passam a não interfirir
*/

//comando para inicia um servidor local que vai sempre apontar para pasta public dentro do diretório do programa -> php -S localhost:8001 -t public

//comando php -a - abre um terminal do php , terminal interativo
