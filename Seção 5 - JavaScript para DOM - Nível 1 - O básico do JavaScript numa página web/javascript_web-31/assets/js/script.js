/* ======= Aplicando Estilos Inline nos Elementos com JavaScript ======= */

// APLICAR ESTILOS INLINE COM JAVASCRIPT

//Exemplo 1
//alterar a cor do titulo para vermelho
//document.querySelector("h1").style.color = "red";


//Exemplo 2
//let el = document.querySelector('h1');
//el.style.color = "#f00";

//altera a cor do fundo para amarelo
//el.style.backgroundColor = "yellow";


//Exemplo 3
//let el = document.querySelector("p");
//console.log(el.style.backgroundColor);


//Exemplo 4
//let el = document.querySelector("p");
//const estilos = window.getComputedStyle(el);
//console.log(estilos.getPropertyValue('color'));



//Exemplo 5
let el = document.querySelector("p");
const estilos = window.getComputedStyle(el);
console.log(estilos.getPropertyValue('font-size'));





/*
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    07/03/2023
*/
