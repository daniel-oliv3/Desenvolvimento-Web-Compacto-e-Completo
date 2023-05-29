<?php

    /*
        Ordena por ordem alfabética os produtos do array e apresenta
        os dados numa ul
    */

    $produtos = ['laranja', 'arroz', 'batata', 'feijão', 'castanha'];
    sort($produtos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    
    <ul>
        <li><?= $produtos[0] ?></li>
        <li><?= $produtos[1] ?></li>
        <li><?= $produtos[2] ?></li>
        <li><?= $produtos[3] ?></li>
        <li><?= $produtos[4] ?></li>
    </ul>

</body>
</html>




<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    29/05/2023
-->