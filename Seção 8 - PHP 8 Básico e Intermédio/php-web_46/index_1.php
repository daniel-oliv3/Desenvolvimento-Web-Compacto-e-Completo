<?php

// ESCOPO DE VARIÁVEIS

/* 
O escopo de uma variável indica a fronteira dentro da qual uma
variável pode ser acedida.
Existem um escopo global e um escopo local.
De um modo geral, as variáveis no PHP têm apenas um escopo: global ou local.
Voltaremos a falar sobre escopo de variáveis no módulo relacionado com OOP.
*/

$nome = 'Daniel';     // é uma variável de escopo global.
/* 
Esta variável vai estar disponível para ser usada dentro instruções condicionais e
ciclos neste script e noutros scripts que possam ser importados
para o interior deste script. (include e require)
*/

if(true){
    echo $nome . '<br>';
}

for($i=1; $i<=2; $i++){
    echo $nome . '<br>';
}



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/06/2023
-->