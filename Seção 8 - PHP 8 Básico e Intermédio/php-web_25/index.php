<?php

    // OPERADORES

    // Já conheces alguns pilares base da linguagem PHP.
    // Estamos próximos de começar a fazer os nossos pequenos exercícios,
    // mas é importante, para essa tarefa, conhecer alguns operadores.
    // O que são e para que servem?

    // Um operador é algo que recebe um ou mais valores (expressões)
    // e que devolve outro valor
    echo '<pre>';

    echo 10 + 20;   // + é um operador matemático de adição. Resultado: 30

    // ----------------------------
    // Os operadores podem ser agrupados da seguinte forma:
    /*
        - Só envolve um único valor -> operador unário
        - Envolve dois valores -> operador binário (a maior parte dos operadores)
        - Envolve três valores -> operador ternário
    */

    // OPERADORES MATEMÁTICOS
    // +    -   *   /   %   **
    $x = 10;
    $y = 2;
    var_dump($x + $y);  // int(12)  - adição
    var_dump($x - $y);  // int(8)   - subtração
    var_dump($x * $y);  // int(20)  - multiplicação
    var_dump($x / $y);  // int(5)   - divisão
    var_dump($x % $y);  // int(0)   - resto da divisão
    var_dump($x ** $y); // int(100) - potenciação - 10 elevado a 2

    var_dump(-10);      // int(-10)
    var_dump("10");     // string(2)"10"
    var_dump(+"10");    // int(10)

    var_dump(10 / 2);   // int(5)
    var_dump(10 / 3);   // float(3.3333333333333335)
    var_dump(10 / 2.0); // float(5)

    // var_dump(10 / 0);   // ERRO! divisão por zero
    // para evitar o erro:
    var_dump(fdiv(10,0));

    // cuidado com o módulos
    var_dump(10 % 2);   // int(0)
    var_dump(10 % 3);   // int(1)
    var_dump(10 % 6);   // int(4)
    var_dump(10.5 % 3.2);   // Deprecated !!!!
    var_dump(fmod(10.5, 3.2));  // float(0.8999999999999995)
    // os valores envolvidos na operação são sempre modificados para int
    // para valores float são removidas as casas decimais passando para int



?>

<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    25/05/2023
-->