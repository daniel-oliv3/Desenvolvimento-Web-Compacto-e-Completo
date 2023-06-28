<?php

// Se não houve uma submissão de formulário, dá acesso inválido
if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    die('Acesso inválido');
}

// users (simulação de informação em base de dados)
$users = [
    // aaa
    'joao' => '$2y$10$541nZLM.qW9sEwCoDE4u7ex3MDEMcmwR38XN8vLBZeMbLjduTeY6S',
    // bbb
    'ana' => '$2y$10$d1fHPJ9AafNWJzxLrhgSCOIA0V8ejKgEi9w/b1.w21G9W5nnHkJlS',
    // ccc
    'carlos' => '$2y$10$9KSQq.ujwGOwMmJX7mGQ/erNHDJnzvZT6j7KHHzEw.xkTa1vY4s.O'
];

// vai buscar o username e a password
$username = isset($_GET['text_username']) ? trim($_GET['text_username']) : '';
$password = isset($_GET['text_password']) ? trim($_GET['text_password']) : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Result</title>
</head>

<body>

    <?php if (key_exists($username, $users)) : ?>

        <?php if(password_verify($password, $users[$username])):?>
            <h1>LOGIN OK!!!</h1>
        <?php else: ?>
            <h1>LOGIN INVÁLIDO</h1>
        <?php endif; ?>

    <?php else : ?>
        <h1>LOGIN INVÁLIDO</h1>
    <?php endif; ?>

    <a href="index_1.php">Voltar</a>

</body>

</html>




<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->