<?php

echo "Digite um número: \n";
#o fgets pausa o programa aguardando a entrada
$numero = (float) fgets(STDIN); #fgets:capturar uma string de um arquivo / STDIN: identificador do terminal

echo "O número é: $numero\n";