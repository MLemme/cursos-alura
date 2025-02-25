<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme();
$filme->defineAnoLancamento(2021);
/*
$filme->nome = 'Thor - Ragnarok';
$filme->anoDeLancamento = 2021;
$filme->genero = 'super-heroi';
*/
$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media() . "\n";
echo $filme->anoLancamento();
