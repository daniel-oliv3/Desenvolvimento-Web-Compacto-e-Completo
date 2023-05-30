<?php

$valor1 = 1;
$valor2 = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos While & Do While</title>
</head>

<body>



    <!-- while -->
    <?php while ($valor1 <= 10) : ?>

        <h3>Valor = <?= $valor1++ ?></h3>

    <?php endwhile; ?>




    <!-- do while -->
    <?php do { ?>
        <h3><?= $valor2++ ?></h3>
    <?php } while ($valor2 <= 10) ?>




</body>

</html>





<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/05/2023
-->