<?php

// COMO USAR NAMESPACES E QUAL A SUA UTILIDADE

// como vamos usar a classe que criámos no script anterior.
// 1. Vamos importar o script

require_once('index_1.php');

// 2. Para podermos instanciar a classe do script index_1.php,
// temos que ter em atenção o seu namespace.

$matematica = new Matematica(); // NOK
// Fatal error: Uncaught Error: Class "Matematica" not found

$matematica = new classes_principais\Matematica();
echo $matematica->adicionar(10,20); // 30

// vamos ver então o que os namespaces permitem fazer.










?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    31/07/2023
-->