<?php

// verifica se houve um request do tipo POST
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso inválido.');
}

echo '<pre>';
print_r($_POST);






?>



<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->