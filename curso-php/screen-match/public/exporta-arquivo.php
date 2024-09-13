<?php

#variavel que recebe os dados de uma mensagem http pelo método post
$filme_post = [
    'nome' => $_POST['nome'],
    'anoLancamento' => $_POST['ano'],
    'nota' => $_POST['nota'],
    'genero' => $_POST['genero'],
];

$caminhoArquivo = __DIR__ . '/filme.json';

$conteudoArquivoFilme = file_get_contents ($caminhoArquivo);

$filme = json_decode($conteudoArquivoFilme, true);

array_push($filme,$filme_post);

file_put_contents($caminhoArquivo,json_encode($filme));

#como método habitual, se usa post/redirect/get ou seja ao atender um post eu devolvo com um get que redireciona durante uma comunicação http através de um cabeçalho http
#desta maneira usasse o parâmetro de cabeçalho location onde redireciona para página e nesse momento se pode enviar os dados recebidos concatenando através ? mais os dados
header('Location: /sucesso.php?filme=' . $filme_post['nome']);

echo 'enviado com sucesso';