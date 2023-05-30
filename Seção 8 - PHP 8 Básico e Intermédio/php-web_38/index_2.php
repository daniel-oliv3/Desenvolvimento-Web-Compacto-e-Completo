<?php

// OPERADOR TERNÁRIO

$erro = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .erro {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    
    <div class="<?= $erro ? 'erro' : '' ?>">RESULTADO</div>

    <!-- 

    O mesmo que:
    <div class="erro">RESULTADO</div>

     -->

</body>
</html>




<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    29/05/2023
-->