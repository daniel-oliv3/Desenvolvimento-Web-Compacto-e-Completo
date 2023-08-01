<?php

abstract class Veiculo
{
    protected $tipo;
    protected $marca;
    protected $ano;
    
    public function __construct($dados)
    {
        $this->tipo = $dados[0];
        $this->marca = $dados[1];
        $this->ano = $dados[2];
    }

    public function get_tipo(){
        return $this->tipo;
    }
}

class Automovel extends Veiculo
{
    public function apresentar()
    {
        return "Este objeto guarda os dados de um automóvel da marca {$this->marca}, do ano {$this->ano}";
    }
}

class Aviao extends Veiculo
{
    public function apresentar()
    {
        return "Este objeto guarda os dados de um avião da marca {$this->marca}, do ano {$this->ano}";
    }
}

class Barco extends Veiculo
{
    public function apresentar()
    {
        return "Este objeto guarda os dados de um barco da marca {$this->marca}, do ano {$this->ano}";
    }
}

