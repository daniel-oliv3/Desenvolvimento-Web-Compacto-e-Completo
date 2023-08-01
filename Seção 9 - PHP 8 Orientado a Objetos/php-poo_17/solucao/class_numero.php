<?php

class Numero
{
    private $numero;

    public function __construct($n)
    {
        $this->numero = $n;
    }

    public function get_numero()
    {
        return $this->numero;
    }

    public function par_ou_impar()
    {
        return $this->numero % 2 == 0 ? 'par' : 'impar';
    }

    public function tabuada()
    {
        $resultados = [];
        for($i = 1; $i <=10; $i++)
        {
            $resultados[] = "{$this->numero} x $i = " . ($this->numero * $i);
        }
        return $resultados;
    }

    public function raiz_quadrada()
    {
        return sqrt($this->numero);
    }
}
