<?php

function exibeMensagemLancamento(int $ano): void
{

    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }

}

function incluidoNoPlano(bool $planoPrime , int $anoLancamento): bool
{
    return $planoPrime || $anoLancamento < 2020;
}
#Alterado de array associativo para uma váriavel da classe Filme
function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme #array
{
    $filme = new Filme(); #instancia a classe
    $filme->nome = $nome;
    $filme->anoDeLancamento = $anoLancamento;
    $filme->genero = $genero;
    $filme->nota = $nota;

    return $filme;

    /*return [
        "nome" => $nome,
        "ano" => $anoLancamento,
        "nota" => $nota,
        "genero" => $genero,
    ];*/
}