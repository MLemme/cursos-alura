let total = 0;
limpar();


function adicionar(){
    //recuperar valores do nome, quantidade e valor
    let produto = document.getElementById('produto').value;   
    let quantidade = document.getElementById('quantidade').value;

    // Verificar se o produto selecionado é válido
    if (!produto || produto.trim() === "") {
        alert("Selecione um produto válido.");
        return;
    }

    // Verificar se a quantidade inserida é válida
    if (isNaN(quantidade) || quantidade <= 0) {
        alert("Insira uma quantidade válida.");
        return;
    }

    let nomeProduto = produto.split('-')[0]; //transforma em array pelo separador informado e com indice já retorna o elemento
    let valorUnitario = produto.split('R$')[1];

    //calcular o subtotal por produto
    let preco = valorUnitario * quantidade;

    //adicionar no carrinho
    let carrinho = document.getElementById('lista-produtos');
    carrinho.innerHTML = carrinho.innerHTML + `<section class="carrinho__produtos__produto">
          <span class="texto-azul">${quantidade}x</span> ${nomeProduto} <span class="texto-azul">R$${preco}</span>
        </section>`
    
    //calcular o valor total
    total = total + preco;
    let totalCompra = document.getElementById('valor-total');
    totalCompra.textContent = 'R$ ' + total;

    document.getElementById('quantidade').value = 0;
}

function limpar(){
    total = 0;
    document.getElementById('lista-produtos').innerHTML = '';
    document.getElementById('valor-total').textContent = 'R$ 0';
}


