let jogosAlugados = 0; //global - escopo de arquivo


function contarEExibirJogosAlugados() {
    console.log(`Total de jogos alugados: ${jogosAlugados}`);
}


function alterarStatus(id){
    let gameClicado = document.getElementById('game-' + id);
    let imagem = gameClicado.querySelector('.dashboard__item__img');
    let botao = gameClicado.querySelector('.dashboard__item__button'); //recupera elemento interno pela classe que ele possui

    if (imagem.classList.contains('dashboard__item__img--rented')){
        //confirm é igual alert só que retorna true para o OK
        if (confirm(`Você tem certeza que deseja devolver o jogo ${gameClicado.textContent}?`)) {
            imagem.classList.remove('dashboard__item__img--rented');
            botao.classList.remove('dashboard__item__button--return');
            botao.textContent = "Alugar";

            jogosAlugados--;
        }
    }else{
        imagem.classList.add('dashboard__item__img--rented')
        botao.classList.add('dashboard__item__button--return');
        botao.textContent = "Devolver";

        jogosAlugados++;
    }

    contarEExibirJogosAlugados();
}   

// Inicializa a contagem considerando que os jogos já começam alugados
document.addEventListener('DOMContentLoaded', function() {
    jogosAlugados = document.querySelectorAll('.dashboard__item__img--rented').length;
    contarEExibirJogosAlugados();

    //Ultimo desafio
    // Exemplo de uso:
    ordenarNumeros(3, 1, 5); // Deve exibir "Números ordenados: 1, 3, 5"

});


function ordenarNumeros(a, b, c) {
    const numerosOrdenados = [a, b, c].sort((x, y) => x - y);
    console.log(`Números ordenados: ${numerosOrdenados.join(', ')}`);
}

