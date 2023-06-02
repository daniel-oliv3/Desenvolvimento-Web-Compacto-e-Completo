<?php
session_start();
unset($_SESSION['apelido']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php require_once 'nav.php' ?>

    <hr>
    <h2>Valor de 'apelido' removido à sessão.</h2>

</body>
</html>



<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    02/06/2023
-->