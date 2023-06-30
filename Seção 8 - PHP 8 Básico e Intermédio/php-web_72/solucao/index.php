<?php

// criar a função aqui ...
function dividir($a, $b){
    try {
        return $a / $b;
    } catch (Throwable $th) {
        return null;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 03</title>
</head>

<body>

    <?php for ($i = 0; $i < 20; $i++) : ?>

        <?php 
            $valor1 = rand(0,10);
            $valor2 = rand(0,10);
            $resultado = dividir($valor1, $valor2);
        ?>

        <!-- apresentar os valores aqui -->
        <p><?= "$valor1 : $valor2 = " . ($resultado === null ? 'Divisão por zero' : $resultado ) ?></p>

    <?php endfor; ?>


</body>

</html>










<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/06/2023
-->