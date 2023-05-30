<?php

// CICLO FOR

// no contexto do PHP embebido no HTMl

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            margin: 5px;
            background-color: rgb(200,200,200);
        }
    </style>
</head>

<body>

    <?php for ($i = 1; $i <= 3; $i++): ?>
        <div class="card">
            <h3>Título <?= $i ?></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium magnam maxime fugit autem eum sint cupiditate ipsam atque quaerat, neque, laboriosam adipisci ipsum voluptatum optio temporibus? Vitae cum mollitia quisquam?</p>
        </div>
    <?php endfor; ?>

</body>

</html>




<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    30/05/2023
-->