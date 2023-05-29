<?php

    /*
        Usando como ponto de partida o array de produtos,
        inverte a ordem dos mesmos, acrescenta no final
        'maçã' e 'pêra' e apresenta numa ul.
    */

    $produtos = ['arroz', 'batata', ' laranja'];
    $produtos = array_reverse($produtos);
    array_push($produtos, 'maçã', 'pêra');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
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