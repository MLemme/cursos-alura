
function comprar(){
    let tipoIngresso = document.getElementById('tipo-ingresso').value;
    let quantidade = parseInt(document.getElementById('qtd').value);
    let idIngresso = ''

    // Verificar se a quantidade é um número positivo
    if (isNaN(qtd) || qtd <= 0) {
        alert('Por favor, insira uma quantidade válida.');
        return;
    }

    switch (tipoIngresso) {
        case 'pista':
            idIngresso = 'qtd-pista';
            break;
        case 'superior':
            idIngresso = 'qtd-superior';
            break;
        case 'inferior':
            idIngresso = 'qtd-inferior';
            break;
        default:
            break;
    }

    let quantidadeIngresso = parseInt(document.getElementById(idIngresso).textContent);
    let qtdIngressoDisponivel = document.getElementById(idIngresso);
    if (quantidadeIngresso > quantidade){
        qtdIngressoDisponivel.textContent = quantidadeIngresso - quantidade;
    }else{
        alert(`Quantidade indisponível para ${tipoIngresso}`)
    }
}