<?php
#1 - Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.

$notas = [8.5, 9.2, 7.8, 9.0, 8.8];
rsort($notas); // Ordena de forma decrescente (r de reverso)
    
echo "As três maiores notas são: $notas[0], $notas[1] e $notas[2]";

#2 - Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.

$string = "Vinicius Dias,1997,Programador";

var_dump(explode(',', $string));

#3 - Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.

function ordenarStrings(array $array): array
{
    sort($array);
    return $array;
}

// Exemplo de uso:
$array = array("banana", "abacaxi", "laranja", "uva");
$arrayOrdenado = ordenarStrings($array);
echo "Array ordenado: ";
print_r($arrayOrdenado);

?>