/* ----------------------------------------------------------------------------

Exercício: 002
Enunciado: CONTADOR COM INTERVALO DE VALORES
    
    A partir do HTML existente, apresentar um valor inicial igual a 0 e definir
    funcionalidades nos botões de decremento e incremento.
    O valor nunca poderá ser inferior a -10 ou superior a 10.

---------------------------------------------------------------------------- */
let valor = 0;

const h1_valor = document.querySelector("#valor");


document.querySelector("#btn_decremento").addEventListener('click', () => {
    if(valor == -10) return;
    h1_valor.textContent = --valor;
});


document.querySelector("#btn_incremento").addEventListener('click', () => {
    if(valor == 10) return;
    h1_valor.textContent = ++valor;
});















/* 
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    20/03/2023
*/



