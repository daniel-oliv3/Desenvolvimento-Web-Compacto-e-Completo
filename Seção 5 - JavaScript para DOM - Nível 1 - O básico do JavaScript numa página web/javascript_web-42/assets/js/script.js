// DESATIVAR A FUNÇÃO NATIVA DE UM LINK
document.querySelector('a').addEventListener('click', (e) => {
    e.preventDefault();
});







// DESATIVAR A SUBMISSÃO DO FORMULÁRIO
document.querySelector('input[type="submit"]').addEventListener('click', (event) => {
    //validação do formulario...

    console.log(event);
    event.stopPropagation();
    event.preventDefault();
});








// CUIDADO COM A PROPAGAÇÃO!
document.querySelector('.caixa').addEventListener('click', () => {
    console.log('div');
});







/*
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    19/03/2023
*/
