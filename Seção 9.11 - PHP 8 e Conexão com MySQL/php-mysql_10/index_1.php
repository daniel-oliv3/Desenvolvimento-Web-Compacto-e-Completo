<?php

// MAIS SEGURANÇA COM CONSULTAS PARAMETRIZADAS

/* 
No vídeo anterior vimos uma das principais falhas
evocadas no uso do PHP e na sua conexão com o MySQL:
SQL Injection.

Para solucionar este problema, vamos voltar ao mesmo exercício,
mas desta vez com a execução da query de uma forma diferente.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index_2.php" method="post">
        <div>
            <label>Username:</label>
            <input type="text" name="text_username">
        </div>
        <div>
            <label>Password:</label>
            <input type="text" name="text_passwrd">
        </div>
        <div>
            <input type="submit" value="Entrar">
        </div>
    </form>

</body>
</html>




<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    15/08/2023
-->