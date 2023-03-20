// Detalhes Sobre Carregamento do JavaScript no HEAD do HTML

// // este código vai ser executado antes dos elementos do body existire,
// document.querySelector("button").addEventListener('click', () => {
//     document.querySelector('h1').innerText = "Texto do título alterado";
// })


// console.log(document.readyState);


// document.addEventListener('readystatechange', (event) => {
//     // console.log(event.target.readyState);
//     if(event.target.readyState === 'complete'){
//         // este código vai ser executado antes dos elementos do body existire,
//         document.querySelector("button").addEventListener('click', () => {
//             document.querySelector('h1').innerText = "Texto do título alterado";
//         });
//     }
// });





document.addEventListener('DOMContentLoaded', () => {
    document.querySelector("button").addEventListener('click', () => {
        document.querySelector('h1').innerText = "Texto do título alterado!";
    });
});
























/*
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    20/03/2023
*/
