// CRIAR E REMOVER ELEMENTOS HTML

let div1 = document.querySelector("#elemento_2");
let novo_paragrafo1 = document.createElement('p').textContent = "Texto do novo parágrafo 1";

// // --------------------------
// // adicionar elemento antes
// div1.before(novo_paragrafo1);


// // --------------------------
// // adicionar no início do elemento
// div1.prepend(novo_paragrafo1);


// // --------------------------
// // adicionar no fim do elemento
// div1.append(novo_paragrafo1);


// // --------------------------
// // adicionar depois do elemento
// div1.after(novo_paragrafo1);



// // --------------------------
let div2 = document.querySelector("#elemento_3");
let novo_paragrafo2 = document.createElement('p').textContent = "Texto do novo parágrafo 2";
div2.insertAdjacentHTML('beforebegin', novo_paragrafo2);
div2.insertAdjacentHTML('afterbegin', novo_paragrafo2);
div2.insertAdjacentHTML('beforeend', novo_paragrafo2);
div2.insertAdjacentHTML('afterend', novo_paragrafo2);



// // REMOVER ELEMENTOS DO HTML

// // remover o elemento
let e = document.querySelector("#elemento_1");
e.remove();



// IMPORTANTE:
// Existem vários outros métodos para adicionar e remover elementos no DOM.
// Nesta abordagem, ficas já com uma perspetiva geral de alguns métodos para o fazer.




/*
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    12/03/2023
*/
