/* ----------------------------------------------------------------------------

Exercício: 004
Enunciado: TRÊS SLIDERS COM VALORES INDEPENDENTES
    
    Estão disponíveis três input ranges e respetivas áreas de apresentação dos valores.
    Criar os mecanismos que permitem visualizar os valores dos sliders.
    Todos os sliders devem variar entre 0 e 100. Essas propriedades devem ser
    definidas através do JavaScript.

---------------------------------------------------------------------------- */

const range_1 = document.querySelector('#range_1');
range_1.setAttribute('min', 0);
range_1.setAttribute('max', 100);
range_1.value = 0;
range_1.addEventListener('input', (event) => {
    document.querySelector("#value_1").textContent = event.target.value;
});



const range_2 = document.querySelector('#range_2');
range_2.setAttribute('min', 0);
range_2.setAttribute('max', 100);
range_2.value = 0;
range_2.addEventListener('input', (event) => {
    document.querySelector("#value_2").textContent = event.target.value;
});

const range_3 = document.querySelector('#range_3');
range_3.setAttribute('min', 0);
range_3.setAttribute('max', 100);
range_3.value = 0;
range_3.addEventListener('input', (event) => {
    document.querySelector("#value_3").textContent = event.target.value;
});


/* 
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    20/03/2023
*/



