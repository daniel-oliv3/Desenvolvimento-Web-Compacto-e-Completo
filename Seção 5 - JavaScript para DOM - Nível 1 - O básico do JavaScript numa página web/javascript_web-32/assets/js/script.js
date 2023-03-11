// MANIPULAR CSS ATRAVÉS DE className e classList

let container = document.querySelector('section');

// ver o valor de class na consola
// console.log(container.className);

// alterar o valor de class
// container.className = "container";
// console.log(container.className);

//  adicionar mais uma classe
// container.className += " container-light";

// Não é muito prático. Vamos ver classList
// console.log(container.classList);





// // -----------------------------------
// // ADICIONAR
// // -----------------------------------
// adicionar classes
// container.classList.add('container-light');

// adicionar multiplas classes
// container.classList.add('outra-class1', 'outra-class2');




// // -----------------------------------
// // REMOVER
// // -----------------------------------
// container.classList.remove('classe-a')
// //ou multiplas classes
// container.classList.remove('classe-a', 'classe-b')




// // -----------------------------------
// // ALTERNAR CLASSES
// // -----------------------------------
container.classList.toggle('container');

// // -----------------------------------
// // verificar se uma classe existe no elemento
// // -----------------------------------
if(container.classList.contains('container')){
    console.log('A classe container existe.')
} else {
    console.log('A classe container não existe.')
}





/*
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    09/03/2023
*/
