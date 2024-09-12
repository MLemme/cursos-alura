<?php

#1 Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
{
    return match($operacao) {
        'soma' => $numero1 + $numero2,
        'subtração' => $numero1 - $numero2,
        'divisão' => $numero2 != 0 ? $numero1 / $numero2 : 400,
        'multiplicação' => $numero1 * $numero2,
    };    
}

//echo operacaoMatematica((int) $argv[1], (int) $argv[2], $argv[3],); Teste

#2 Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.

function calculaImc(float $alturaEmMetros, float $pesoEmQuilos): float
{
    $altura = 1.73;
    $peso = 65;

    return $peso / $altura ** 2;
}

#3 Crie uma função em PHP que converta graus celsius para Fahrenheit.

function celsiusToFahrenheit(float$celsius): float
{
    return ($celsius * 9 / 5) + 32;
}