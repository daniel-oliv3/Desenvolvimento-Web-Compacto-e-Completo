<?php

use sys4soft\Database;

// importar a class Database e configurações
require_once('Database.php');


// instanciação de objeto Database
$config = [
    'host' => 'localhost',
    'database' => 'os_meus_clientes',
    'username' => 'user_meus_clientes',
    'password' => '45tA873IwA8a8aYIg53ud6lA6aQiTO',
];

$database = new Database($config);


// parametros
$params = [
    ':nome' => $_POST['text_nome'],
    ':email' => $_POST['text_email']
];


// inserir os dados do cliente
$result = $database->execute_non_query("INSERT INTO clientes(nome, email, created_at) VALUES(:nome, :email, NOW())", $params);

// echo '<pre>';
// print_r($result);

// voltar ao formulário automaticamente
header('Location: formulario.php');


?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    18/08/2023
-->