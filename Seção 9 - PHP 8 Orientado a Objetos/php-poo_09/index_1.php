<?php

// IMPEDIR HERANÇA DE CLASSE OU MÉTODO

/* 
Imagina que vais criar um bloco de código que vai ser usado
por outro programador. Vais querer que a estrutura da tua classe
contenha mecanismos que impessam determinado tipo de ações.
Por exemplo, podes querer que uma determinada classe não possa ser
herdada por outra. Ou simplesmente, um determinado método dessa classe
não deverá poder ser sobreposto (override) por outro dentro da classe 'filha'

Vejamos como alcançar esse resultado.
*/

final class Classe_unica
{
    // esta classe não vai poder ser herdada (usando o extends)

    // ...
}

// Se tentarmos criar uma nova classe que extende esta anterior...
class Nova extends Classe_unica
{
    // Fatal error: Class Nova may not inherit from final class
}

// Para atingir o resultado, usamos a palavra reservada FINAL





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    07/07/2023
-->