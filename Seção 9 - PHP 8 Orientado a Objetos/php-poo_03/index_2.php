<?php

// COMO ESCREVER UMA CLASSE E INSTANCIAR UM OBJETO

/* 
Vamos fazer uma pequena implementação
*/

class Fruto
{
    // propriedades
    public $nome;
}

$laranja = new Fruto();

// definir o valor da propriedade
$laranja->nome = "Laranja";

// criar um outro objeto do tipo Fruto
$ananas = new Fruto();
$ananas->nome = 'Ananás';


// como vamos apresentar as propriedades de um objeto?
echo $laranja->nome;
echo '<br>';
echo $ananas->nome;

// cada objeto criado a partir da mesma classe, contém as suas propriedades
// de forma completamente independente.





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    04/07/2023
-->