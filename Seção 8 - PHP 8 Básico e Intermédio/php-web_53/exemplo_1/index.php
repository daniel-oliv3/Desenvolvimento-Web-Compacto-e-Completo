<?php

    // verifica se existe o cookie esperado
    $valor = '[não existe cookie]';
    if(!empty($_COOKIE['meu_cookie'])){
        $valor = $_COOKIE['meu_cookie'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies</title>
</head>
<body>

   <?php require_once('nav.php') ?>

   <h3>Início</h3>
   <hr>
   <p>Valor do cookie: <?= $valor ?></p>

</body>
</html>



<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    06/06/2023
-->