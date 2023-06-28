<?php

// A SUPER GLOBAL $_GET

// vamos usar o endereço:
// http://localhost/aula_061/index_3.php?id=100&produto=bicicleta

$id = isset($_GET['id']) ? $_GET['id'] : null;
$produto = isset($_GET['produto']) ? $_GET['produto'] : null;

echo "ID = $id <br>";
echo "Produto = $produto";

/* 
Vejamos a informação disponível nas ferramentas do programador
Network > Name
Headers > Método GET e Payload

Esta é uma das formas que podes usar para passar
informações entre páginas. Cuidado, nunca passes informações
que possam ser sensíveis ao funcionamento da tua aplicação.

Outra nota: Existem determinados caracteres que entram em conflito
com uma query string. Por exemplo o &, o espaço, o < e >
Veremos noutra ocasião como ultrapassar esses desafios.

Estes são os princípios básicos da utilização da super global $_GET
*/










?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    28/06/2023
-->