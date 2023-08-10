<?php

// OBTER DADOS EM DIFERENTES FORMATOS

/*
Uma nota final sobre esta matéria.
Existem outras formas de indicar ao PDO como deve devolver
os resultados.
*/

$database = 'udemy_loja_online';
$username = 'user_loja_web';
$password = 'NAKOHoG5';

$ligacao = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
$resultados = $ligacao->query("SELECT * FROM produtos");
$resultados->setFetchMode(PDO::FETCH_ASSOC);

$ligacao = null;

while($linha = $resultados->fetch())
{
    echo $linha['produto'] . ' - Preço: ' . $linha['preco_unidade'] . '<br>';
}





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    10/08/2023
-->