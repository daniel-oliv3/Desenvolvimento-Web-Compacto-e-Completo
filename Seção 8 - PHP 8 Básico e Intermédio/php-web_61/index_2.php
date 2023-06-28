<?php

// A SUPER GLOBAL $_GET

// vamos usar o endereço:
// http://localhost/aula_061/index_2.php?id=100

// para captar um determinado valor da query string, recorremos
// à chave do array associativo da super global $_GET

echo $_GET['id'];

// Mas cuidado. Se a variável não existir vai surgir um erro.

// echo $_GET['teste'];

// Devemos sempre verificar se existe e depois captar esse parâmetro
$valor = null;
if(isset($_GET['teste'])){
    $valor = $_GET['teste'];
}
echo '<br>';
echo "Valor: $valor";








?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->