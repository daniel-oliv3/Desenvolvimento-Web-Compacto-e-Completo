<?php

// DECLARAÇÃO STRICT TYPES

/* 
A linguagem PHP é muito conhecida por ser fracamente tipada.
Na realidade, muitos programadores atualmente ainda usam
o PHP com variáveis, métodos e parâmetros que não definem
que tipo de valores aceitam ou retornam.

Com a evolução da linguagem, e apesar de não ser obrigatório
o seu uso, a definição de tipos nas propriedades de
uma classe, parâmetros e retorno de funções e métodos
passou a ser possível.

Neste vídeo vamos ver rapidamente alguns exemplos.
*/

function apresentar1($mensagem)
{
    echo "Mensagem: $mensagem<br>";
}

function apresentar2(String $mensagem)
{
    echo "Mensagem: $mensagem<br>";
}

apresentar1("Mensagem do tipo string");
apresentar2(100);

// Estes exemplos vão funcionar corretamente.




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/08/2023
-->