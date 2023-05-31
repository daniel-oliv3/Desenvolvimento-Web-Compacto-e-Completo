<?php

// FUNÇÕES - RETURN

/* 
A instrução 'return' quando usada no interior de uma função,
permite devolver um resultado da execução do código dessa função.

Por exemplo:
*/

function mensagem(){
    return "Este texto foi criado dentro da função.";
}

/* 
Se a função for apenas chamada, não vai acontecer nada.
*/
mensagem();

// podemos então atribuir o valor de retorno, por exemplo a uma variável.
$texto = mensagem();
echo $texto;

echo '<hr>';

// ----------------------------------
// Podemos executar qualquer tipo de operação dentro de uma função
// e devolver resultados.
function construir_resultado(){
    $valor1 = 100;
    $valor2 = 5;
    return $valor1 * $valor2;
}

$resultado = construir_resultado();
echo $resultado;

// Neste contexto, o ideal será passar valores para dentro da função
// e usar esses valores para devolver resultados.
// Vamos falar sobre PARÂMETROS de uma função.





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    31/05/2023
-->