// INTRODUÇÃO À VALIDAÇÃO DE FORMULÁRIOS
document.formulario_login.addEventListener('submit', (event) => {

    //Buscar os valores dos campos
    let usuario = event.target.usuario.value;
    let senha = event.target.senha.value;
    let submit = true;

    //validar usuario
    if(usuario === ""){
        submit = false;

        //erro
        let tmp = document.querySelector('input[name="usuario"]');
        tmp.insertAdjacentHTML('afterend', '<span class="error">Usuário é obrigatório!</span>');
    }

    //validar senha
    if(senha === ""){
        submit = false;

        //erro
        let tmp = document.querySelector('input[name="senha"]');
        tmp.insertAdjacentHTML('afterend', '<span class="error">Senha é obrigatória!</span>');
    }


    //verifica se o formulario pode ser submetido
    if(!submit){
        event.preventDefault();

        setTimeout(() => {
            document.querySelectorAll(".error").forEach(e => e.remove());
        }, 2000);
    }







});





































/*
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    20/03/2023
*/
