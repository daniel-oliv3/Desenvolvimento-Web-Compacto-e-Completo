<?php

    /*
        Constrói a lógica condicional que permite apresentar apenas
        o parágrafo correspondente ao valor da variável $nome
    */

    // $nome = 'Daniel';
    // $nome = 'Ana';
    // $nome = 'Carlos';
    $nome = 'Sapup3';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    
    <?php if($nome == "Daniel"): ?>
    <p>O nome é Daniel</p>
    <?php elseif($nome == "Ana"): ?>
    <p>O nome é Ana</p>
    <?php elseif($nome == "Carlos"): ?>
    <p>O nome é Carlos</p>
    <?php else: ?>
    <p>É um nome desconhecido</p>
    <?php endif; ?>

</body>
</html>






<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    29/05/2023
-->