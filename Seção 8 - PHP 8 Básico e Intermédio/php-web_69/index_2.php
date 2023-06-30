<?php
/*
Neste módulo introdutório não iremos explorar em profundidade
alguns conceitos mais avançados de gestão de erros.
No entanto, vamos aos conceitos fundamentais.

Quando identificamos um espaço do nosso código que pode
originar um erro dinamicamente, podemos usar a estrutura
try... catch... finally...

A estrutura é a seguinte:

try {
    código que pretendemos executar de forma segura
}
catch (Throwable $e){
    código que será executado no caso de acontecer um erro
}
finally {
    código que será sempre executado, quer tudo corra bem
    quer aconteça um erro
}

Colocamos o código que pretendemos executar sem erros destrutivos
dentro do bloco try.

Se algum erro ocorrer, será automaticamente guardada a mensagem de
erro no Exception $e e é executado o código dentro do bloco catch.

Adicionalmente, podemos colocar um bloco finally para
código que será sempre executado a seguir a um try ou catch.

*/

$valor1 = 10;
$valor2 = 0;

// $resultado = $valor1 / $valor2; // Uncaught DivisionByZeroError: Division by zero

try {
    $resultado = $valor1 / $valor2;
    echo $resultado;
} catch (Throwable $e) {
    echo 'ERRO: ' . $e->getMessage();
} finally {
    echo '<br>Este código será sempre executado.</br>';
}

echo 'FIM!';

// iremos perceber melhor quando usar este tipo de estrutura
// nos exemplos e exercícios que temos reservados para o
// final deste módulo.



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/06/2023
-->
