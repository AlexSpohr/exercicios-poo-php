<?php

class Carta 
{
    private $naipe;
    private $valor;
    
    public function __construct($naipe, $valor) 
    {
        $naipesValidos = array("paus", "ouros", "copas", "espadas");
        $valoresValidos = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "valete", "dama", "rei", "ás");
        
        if (!in_array($naipe, $naipesValidos) || !in_array($valor, $valoresValidos)) 
        {
            throw new Exception("Naipe ou valor de carta inválido.");
        }
        
        $this->naipe = $naipe;
        $this->valor = $valor;
    }
    
    public function getNaipe() 
    {
        return $this->naipe;
    }
    
    public function getValor() 
    {
        return $this->valor;
    }
}