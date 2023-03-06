// FUNCTIONS

/* 
    function nome_da_funcao(){
        código executado dentro da função
    }
*/





// ------------------------------
// exemplo 1
// ------------------------------
/*function escrever(){
    console.log('Aqui está a frase da função.');
}

 escrever();*/






// ------------------------------
// exemplo 2 - parâmetros
// ------------------------------
/*function escrever(mensagem){
   console.log(mensagem);
}

escrever("Olá Mundo!");
escrever("As funções são fáceis de criar");*/




// ------------------------------
// exemplo 3 - parâmetros e retorno
// ------------------------------
function adicionar(a, b){
    return a + b;
}

let resultado = adicionar(100, 200);
console.log("Resultado: " + resultado);




// ------------------------------
// exemplo 4 - parâmetros com valor padrão (default values)
// ------------------------------
// function saudacao(mensagem = "Bom dia"){
//     console.log(mensagem);
// }

// saudacao();
// saudacao("Boa noite");