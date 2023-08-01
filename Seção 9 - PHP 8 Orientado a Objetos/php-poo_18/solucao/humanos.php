<?php

class Humanos
{
    private $masculinos = [];
    private $femininos = [];
    private $desconhecidos = [];

    public function definir($sexo, $nome)
    {
        if (strtoupper($sexo) == 'M') {
            $this->masculinos[] = $nome;
        } elseif (strtoupper($sexo) == 'F') {
            $this->femininos[] = $nome;
        } else {
            $this->desconhecidos[] = $nome;
        }
    }

    public function get_masculinos()
    {
        return $this->masculinos;
    }

    public function get_femininos()
    {
        return $this->femininos;
    }
    
    public function get_desconhecidos()
    {
        return $this->desconhecidos;
    }
}





?>


<!--
    Autor: Daniel Oliveira
    Email: danieloliveira.webmaster@gmail.com
    Manaus/Amazonas/Brasil
    01/08/2023
-->