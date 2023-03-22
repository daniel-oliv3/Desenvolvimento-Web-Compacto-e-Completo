/* ----------------------------------------------------------------------------

Exercício: 005
Enunciado: TRÊS SLIDERS COM VALORES INDEPENDENTES - VERSÃO CÓDIGO REDUZIDO
    
    O exercício anterior, mas com quantidade de código JS reduzida.

---------------------------------------------------------------------------- */

for(let r = 1; r <= 3; r++){
    let el = document.querySelector("#range_" + r);
    el.setAttribute('min', 0);
    el.setAttribute('max', 100);
    el.value = 0;
    el.addEventListener('input', (e) => {
        document.querySelector("#value_" + r).textContent = e.target.value;
    });
}
















/* 
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    21/03/2023
*/



