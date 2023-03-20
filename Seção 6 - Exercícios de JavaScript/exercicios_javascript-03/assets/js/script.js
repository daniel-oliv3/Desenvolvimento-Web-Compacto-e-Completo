/* ----------------------------------------------------------------------------

Exercício: 003
Enunciado: CONTADOR COM CORES PARA NEGATIVOS, ZERO E POSITIVOS
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento.
    No caso do valor ser zero o texto deve ser branco.
    No caso do valor ser negativo o texto deve ser vermelho puro.
    No caso do valor ser positivo o texto deve ser verde puro.

---------------------------------------------------------------------------- */

let valor = 0;

const h1_valor = document.querySelector("#valor");


document.querySelector("#btn_decremento").addEventListener('click', () => {
    --valor;
    set_valor();
});


document.querySelector("#btn_incremento").addEventListener('click', () => {
    ++valor;
    set_valor();
});



function set_valor(){
    h1_valor.textContent = valor;

    let color = valor == 0 ? 'white' : valor < 0 ? 'red' : 'green';
    h1_valor.style.color = color;
}



// function set_valor(){
//     h1_valor.textContent = valor;
//     if(valor === 0) h1_valor.style.color = "white";
//     else if(valor > 0) h1_valor.style.color = "green";
//     else h1_valor.style.color = "red";   
// }

// function set_valor(){
//     h1_valor.textContent = valor;
//     if(valor === 0){
//         h1_valor.style.color = "white";
//         } else if(valor > 0) {
//             h1_valor.style.color = "green";
//         } else {
//             h1_valor.style.color = "red";
//         }    
// }







/* 
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    20/03/2023
*/



