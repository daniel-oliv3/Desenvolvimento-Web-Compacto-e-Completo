// CRIAR E REMOVER ELEMENTOS HTML

// -----------------------------------------
// podemos criar elementos com o método document.createElement()
// nota: estes elementos não são automaticamente adicionados ao DOM
// -----------------------------------------




// // --------------------
let novo_elemento = document.createElement('p');
novo_elemento.innerText = 'Texto do parágrafo';

// // adicionar ao body
// document.body.appendChild(novo_elemento);




// // --------------------
// // adicionar conteúdo de texto sem tag
// var conteudo_de_texto = document.createTextNode("Este é um conteúdo de texto sem tag");
// document.body.appendChild(conteudo_de_texto);




// // --------------------
// // adicionar o parágrafo a um dos divs
// let div = document.querySelector('#elemento_1');
// div.appendChild(novo_elemento);




// // --------------------
// // criar um novo div e adicionar o novo parágrafo
let novo_div = document.createElement('div');
novo_div.classList.add('elemento');
novo_div.setAttribute('id', 'elemento_4');


let titulo = document.createElement('h1');
titulo.textContent = 'Título do elemento 4';
novo_div.appendChild(titulo);
document.body.appendChild(novo_div);




/*
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    12/03/2023
*/
