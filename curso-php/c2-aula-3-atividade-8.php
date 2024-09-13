<?php

#1 - Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.

$arquivo = fopen('teste.txt', 'r');
$primeiraLinha = fgets($arquivo);
fclose($arquivo);

#2 - Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.

$nomeArquivo = 'teste.txt';
$novaFrase = "\nPHP é incrível!";

 // Abre o arquivo para escrita no final
$arquivo_2 = fopen($nomeArquivo, 'a');
 // Escreve no arquivo
fwrite($arquivo_2, $novaFrase);
 // Fecha o arquivo
fclose($arquivo_2);

#3 - Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.

$stringJson = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';

var_dump(json_decode($stringJson, true));