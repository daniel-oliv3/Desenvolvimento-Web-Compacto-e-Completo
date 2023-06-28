<?php

// Este script vai tratar a submissão do formulário.

// Se não houve uma submissão de formulário, dá acesso inválido
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Acesso inválido');
}

// vai buscar o username e a password
$username = isset($_POST['text_username']) ? $_POST['text_username'] : '';
$password = isset($_POST['text_password']) ? $_POST['text_password'] : '';

// verifica se o login é válido
$user = [
    "username" => "joao",
    "password" => "aaa"
];

if ($username == $user['username'] && $password == $user['password']) {
    echo '<h1>LOGIN OK</h1>';
} else {
    echo '<h1>LOGIN INVÁLIDO</h1>';
}

// link para voltar atrás
echo '<a href="index_1.php">Voltar</a>';

// NOTA: existem aspetos deste script que não são boas práticas






?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->