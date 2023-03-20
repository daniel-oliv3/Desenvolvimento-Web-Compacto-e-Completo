// Melhorar O Sistema de Validação de Formulários, Anterior

//usuario
document.querySelector('input[name="usuario"]').addEventListener('keyup', () => {
    // console.log(document.querySelector('input[name="usuario"] + span'));
    if(document.querySelector('input[name="usuario"] + span') !== null){
        document.querySelector('input[name="usuario"] + span').remove();
    }
});

//senha
document.querySelector('input[name="senha"]').addEventListener('keyup', () => {
    // console.log(document.querySelector('input[name="senha"] + span'));
    if(document.querySelector('input[name="senha"] + span') !== null){
        document.querySelector('input[name="senha"] + span').remove();
    }
});



document.formulario_login.addEventListener('submit', (event) => {

    //Buscar os valores dos campos
    let usuario = event.target.usuario.value;
    let senha = event.target.senha.value;
    let submit = true;


    //remove erros anteriores
    document.querySelectorAll(".error").forEach( e => e.remove());

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

        
    }







});





































/*
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    20/03/2023
*/
