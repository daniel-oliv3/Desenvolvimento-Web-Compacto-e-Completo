<?php

// SQL INJECTION - O PROBLEMA DE SEGURANÇA

/*
Nos recursos desta aula vais encontrar o ficheiro usuarios.sql
Vamos adicionar esta tabela à base de dados da udemy_loja_online.

Adicionámos 3 usuários para simular um sistema de login.
Neste vídeo vamos ver uma possível fragilidade das nossas
queries que podem comprometer a segurança da aplicação.
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
    11/08/2023
-->