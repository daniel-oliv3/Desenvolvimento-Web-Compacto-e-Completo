<?php

    // INSTRUÇÃO CONDICIONAL IF...ELSEIF...ELSE

    // Estamos prestes a concluir a fase introdutória da linguagem e que nos vai permitir
    // efetuar pequenos projetos.

    // Um script de PHP pode ser constituído por declarações, chamada de funções, loops (que ainda não falámos),
    // instruções condicionais e muito mais.

    // Uma instrução condicional permite agrupar um conjunto de declarações e controlar a execução do fluxo da aplicação.
    // A estrutura condicional IF é uma das mais usadas neste contexto.

    /* 

    if(condição){
        .. executar o código dentro do bloco
    }

    */

    $valor = 10;
    if($valor == 10) {
        echo "OK!";
    }

    // Se a condição falhar (é falsa), o código do bloco não vai ser executado
    // Podemos usar o else para criar uma alternativa.

    if($valor > 10){
        echo "valor é maior que 10";
    } else {
        echo "valor é igual ou inferior a 10";
    }

    // se quisermos adicionar mais condições alternativas, usamos o else if ou elseif (funcionam da mesma forma)
    if($valor > 100){
        // ...
    } elseif($valor > 50){
        // ...
    } elseif($valor > 10){
        // ...
    } elseif($valor > 5){
        // ...
    } else {
        // ...
    }

    // também é possível usar IF dentro de IF as vezes que quiseres
    if($valor > 5){

        if($valor == 10){
            // ...
        } else {
            // ...
        }

    } else {
        // ...
    }


    


?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/05/2023
-->