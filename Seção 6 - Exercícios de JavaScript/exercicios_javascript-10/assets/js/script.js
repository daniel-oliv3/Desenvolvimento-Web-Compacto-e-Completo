/* ----------------------------------------------------------------------------

Exercício: 010
Enunciado:
    Existem 4 áreas a cinza.
    Ao clicar numa das áreas a área clicada deve ficar com fundo
    amarelo e as restantes a vermelho.
---------------------------------------------------------------------------- */

const boxes = document.querySelectorAll('[id^="box"]');
boxes.forEach(box => {
    box.addEventListener('click', (box) => {
        all_red();
        box.target.style.backgroundColor = "yellow";
    });
});


function all_red(){
    boxes.forEach(box => {
        box.style.backgroundColor = "red";
    });
}




/* 
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    23/03/2023
*/



