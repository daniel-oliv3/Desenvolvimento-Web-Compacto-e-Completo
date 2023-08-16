<?php

// dados de ligação
$database = 'nova_base_dados';
$username = 'root';
$password = '';

// ligação
$ligacao = new PDO("mysql:host=localhost", $username, $password);

// destruir a base de dados, caso ela exista
$ligacao->exec("DROP DATABASE IF EXISTS `$database`");

// vamos executar o código para criar a base de dados
$ligacao->exec("CREATE DATABASE IF NOT EXISTS `$database`");

// indicar à ligação qual é a base de dados que vai ser usada
$ligacao->exec("USE `$database`");

// a base de dados está vazia. Vamos criar uma tabela.
$ligacao->exec(
    "CREATE TABLE usuarios (" .
    "`id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, " .
    "`usuario` VARCHAR(30) NULL DEFAULT NULL, " . 
    "`senha` VARCHAR(100) NULL DEFAULT NULL, " .
    "`created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP" .  
    ")"
);

// destruir a ligação
$ligacao = null;

echo 'Terminado';




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    16/08/2023
-->