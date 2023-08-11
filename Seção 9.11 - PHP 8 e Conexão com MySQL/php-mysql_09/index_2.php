<?php

// dados de ligação
$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

// ligação
$ligacao = new PDO("mysql:host=localhost;dbname=$database;charset=utf8", $username, $password);

$username = $_POST['text_username'];
$passwrd = $_POST['text_passwrd'];

$sql = "SELECT * FROM usuarios WHERE username = '$username' AND passwrd = '$passwrd'";

$resultados = $ligacao->query($sql)->fetchAll(PDO::FETCH_OBJ);

// fechar a ligação
$ligacao = null;

echo '<pre>';
print_r($resultados);
echo '<br>';

// analisar se houve login válido
if(count($resultados) == 0){
    echo 'Login inválido.';
} else {
    echo 'Login OK!';
}

// agora vamos colocar a seguinte expressão na password: ' or ''='

echo '<br><br>' . $sql;



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    11/08/2023
-->