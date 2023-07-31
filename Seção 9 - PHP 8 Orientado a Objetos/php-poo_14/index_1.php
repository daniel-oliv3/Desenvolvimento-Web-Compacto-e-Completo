<?php

// PROPRIEDADES ESTÁTICAS

/*
À semelhança dos métodos, as classes também podem
ter propriedades estáticas. Essas propriedades podem
ser chamadas diretamente sem que seja necessário criar
uma instância da classe.
*/

class Matematica
{
    public static $pi = 3.14;
}

// para chamar a propriedade, usamos os ::

echo 'Resultado = ' . Matematica::$pi * 10; // Resultado = 31.4



?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    31/07/2023
-->