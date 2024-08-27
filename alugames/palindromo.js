//Function Declaration
/*essaPalavraEUmPalindromo ();

function essaPalavraEUmPalindromo (){
    var palavra = "rever";
    var separandoAsLetrasDaPalavra = palavra.split("");
    var palavraInvertida = separandoAsLetrasDaPalavra.reverse();
    palavraInvertida = palavraInvertida.join("");
    if (palavra == palavraInvertida){
    console.log("A palavra " + palavra + " é um palindromo");
    }else{
        console.log("A palavra " + palavra + " não é um palindromo");
    }

}*/
//
//Function Expression
//Não aceita comportamento de hoisting (uso antes da declaração) como anterior
const essaPalavraEUmPalindromo = function(palavra){
    //var palavra = "rever";
    var separandoAsLetrasDaPalavra = palavra.split("");
    var palavraInvertida = separandoAsLetrasDaPalavra.reverse();
    palavraInvertida = palavraInvertida.join("");
    if (palavra == palavraInvertida){
    console.log("A palavra " + palavra + " é um palindromo");
    }else{
        console.log("A palavra " + palavra + " não é um palindromo");
    }
}

essaPalavraEUmPalindromo ("radar");