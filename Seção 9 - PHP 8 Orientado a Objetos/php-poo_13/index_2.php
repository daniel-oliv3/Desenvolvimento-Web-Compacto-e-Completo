<?php

// MÉTODOS ESTÁTICOS

/* 
Uma classe pode conter métodos estáticos e métodos não estáticos.
Vejamos o exemplo:
*/

class Matematica
{
    public static function adicionar($a, $b)
    {
        return $a + $b;
    }

    public function executar_operacao()
    {
        $resultado = self::adicionar(10, 20);
        return $this->metodo_interno($resultado);
    }

    private function metodo_interno($valor)
    {
        return $valor * 2;
    } 
}

echo Matematica::adicionar(100,200);    // 300
echo '<br>';

$matematica = new Matematica();
echo $matematica->executar_operacao();  // 60

// O que aconteceu neste script?




?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    08/07/2023
-->