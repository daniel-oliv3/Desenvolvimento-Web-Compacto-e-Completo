<?php

require_once('class_numero.php');

$n1 = new Numero(5);
$n2 = new Numero(7);
$n3 = new Numero(16);
$n4 = new Numero(123);

echo '<pre>';
echo $n1->get_numero() . '<br>';
echo $n1->par_ou_impar() . '<br>';
echo $n1->raiz_quadrada() . '<br>';
print_r($n1->tabuada());

echo '<hr>';

echo $n2->get_numero() . '<br>';
echo $n2->par_ou_impar() . '<br>';
echo $n2->raiz_quadrada() . '<br>';
print_r($n2->tabuada());

echo '<hr>';

echo $n3->get_numero() . '<br>';
echo $n3->par_ou_impar() . '<br>';
echo $n3->raiz_quadrada() . '<br>';
print_r($n3->tabuada());

echo '<hr>';

echo $n4->get_numero() . '<br>';
echo $n4->par_ou_impar() . '<br>';
echo $n4->raiz_quadrada() . '<br>';
print_r($n4->tabuada());

echo '<hr>';


?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/08/2023
-->