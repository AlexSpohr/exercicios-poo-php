<?php 

class Funcionario 
{
    private $salarioBruto; 
    private $valorHorasExtras; 
    private $numeroHorasExtras;
    private $valorINSS = 8; 

    public function __construct($salarioBruto, $valorHorasExtras, $numeroHorasExtras)
    {
        $this->salarioBruto = $salarioBruto; 
        $this->valorHorasExtras = $valorHorasExtras;
        $this->numeroHorasExtras = $numeroHorasExtras;
    }

    public function setSalarioBruto($salario)
    {
        $this->salarioBruto = $salario;
    }

    public function setValorHorasExtras($valorHE)
    {
        $this->valorHorasExtras = $valorHE;
    }

    public function setNumeroHorasExtras($numeroHE)
    {
        $this->numeroHorasExtras = $numeroHE;
    }

    public function setValorINSS($valorINSS)
    {
        $this->valorINSS = $valorINSS;
    }

    public function getSalarioBruto()
    {
        return $this->salarioBruto;
    }

    public function getValorHorasExtras()
    {
        return $this->valorHorasExtras;
    }

    public function getNumeroHorasExtras()
    {
        return $this->numeroHorasExtras;
    }

    public function getValorINSS()
    {
        return $this->valorINSS;
    }

    public function calcularSalarioLiquido()
    {   
        $totalHE = $this->numeroHorasExtras * $this-> valorHorasExtras;
        $this->valorINSS = (100 - $this->valorINSS)/100;
        $salarioLiquido = ($this->salarioBruto + $totalHE) * $this->valorINSS; 
        return $salarioLiquido;
    }
}