/* 
OBJETIVO:
Ao clicar no botão, alterar a cor de fundo da caixa para aquamarine,
apresentar o texto 'clique' na consola e
remover o evento click do botão
*/


let caixa = document.querySelector(".caixa");
let botao = document.querySelector("button");


function executar(event){
    caixa.classList.add('cor-fundo-caixa');
    console.log('clique');
    botao.removeEventListener('click', executar);
}


botao.addEventListener('click', executar);







/*
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    18/03/2023
*/
