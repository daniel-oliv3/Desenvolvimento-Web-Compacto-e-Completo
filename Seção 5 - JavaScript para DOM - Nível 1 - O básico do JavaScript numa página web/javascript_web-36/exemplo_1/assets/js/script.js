function alterar_texto(){
    document.querySelector('h1').textContent = "Novo texto"
}


// não dá para adicionar mais do que um event handler a cada evento
let botao = document.querySelector('#botao')
botao.onclick = funcao1
botao.onclick = funcao2

function funcao1(){
    console.log('clique')
}

function funcao2(){
    document.querySelector('h1').textContent = "Novo texto1"
}



















/*
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    15/03/2023
*/
