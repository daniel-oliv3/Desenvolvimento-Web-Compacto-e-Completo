<?php

    /*
        Uma empresa tem várias lojas, cada uma com um endereço de email.
        A variável $cidade indica que dados de email deverão ser apresentados.
        Constrói a lógica condicional e de apresentação do email correspondente
        quando é alterado o valor da cidade escolhida.
    */

    $lojas = [
        'lisboa' => 'lisboa@gmail.com',
        'porto' => 'porto@gmail.com',
        'coimbra' => 'coimbra@gmail.com'
    ];

    // $cidade = 'lisboa';
    $cidade = 'porto';
    // $cidade = 'coimbra';
    // $cidade = 'manaus';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>


    <?php if(key_exists($cidade, $lojas)): ?>
        <h3><?= $cidade ?></h3>
        <p><?= $lojas[$cidade] ?></p>
    <?php else: ?>
        <p>Não existe nenhuma loja na cidade indicada.</p>
    <?php endif; ?>


    

</body>
</html>






<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    29/05/2023
-->