<?php 
include_once 'Carta.php'; 
class Baralho 
{
    private $pilhaCartas;

    public function __construct()
    {
        $this->pilhaCartas = array(); 
        $naipes = ["paus", "ouros", "copas", "espadas"];
        $valores = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "valete", "dama", "rei", "ás"];
        
        foreach ($naipes as $naipe) {
            foreach ($valores as $valor) {
                $carta = new Carta($naipe, $valor);
                $this->pilhaCartas[] = $carta;
            }
        }
    }

    public function embaralhar()
    {
        shuffle($this->pilhaCartas); 
    }

    function pescar()
    {
    if (empty($this->pilhaCartas))
    {
        throw new Exception("Baralho vazio, não é possível pescar mais cartas");
    }
    return array_shift($this->pilhaCartas);
    }

}