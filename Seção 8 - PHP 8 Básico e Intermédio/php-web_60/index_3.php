<?php

// $_SESSION
// Acesso para leitura e manipulação das variáveis da sessão

session_start();

$_SESSION['usuario'] = 'daniel';
$_SESSION['perfil'] = 'admin';
$_SESSION['autorizado'] = true;

echo '<pre>';
print_r($_SESSION);





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->