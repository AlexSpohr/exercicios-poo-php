<?php 
include_once 'Baralho.php';

class Principal 
{
    private $baralho; 
    private $maoJogador;

    public function __construct()
    {
        $this->baralho = new Baralho();
        $this->maoJogador = array();
    }

    public function main()
    {
        $this->baralho->embaralhar();

        try 
        {
            for ($i = 0; $i < 7; $i++) 
            { 
            $carta = $this->baralho->pescar();
            $this->maoJogador[] = $carta;
            }
        } catch (Exception $e) 
        {
          echo $e->getMessage() . "\n"; 
        }
        
        echo "Cartas na mão do jogador: ";
        foreach ($this->maoJogador as $carta) {
            echo " " . $carta->getValor() . " de " . $carta->getNaipe() . ";";
        }
    }
}

$principal = new Principal();
$principal->main(); 
