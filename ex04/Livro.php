<?php 

class Livro 
{
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $numCopiasDisponiveis; 

    public function __construct($titulo, $autor, $anoPublicacao, $numCopiasDisponiveis)
    {
        $this->titulo = $titulo;
        $this->autor = $autor; 
        $this->anoPublicacao = $anoPublicacao; 
        $this->numCopiasDisponiveis = $numCopiasDisponiveis; 
    }

    public function getTitulo()
    {
        return $this->titulo; 
    }

    public function getAutor()
    {
        return $this->autor; 
    }

    public function getAnoPublicacao()
    {
        return $this->anoPublicacao; 
    }

    public function getNumCopiasDisponiveis()
    {
        return $this->numCopiasDisponiveis; 
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) 
    {
        $this->autor = $autor;
    }

    public function setAnoPublicacao($anoPublicacao) 
    {
        $this->anoPublicacao = $anoPublicacao;
    }
    
    public function setNumCopiasDisponiveis($numCopiasDisponiveis) 
    {
        $this->numCopiasDisponiveis = $numCopiasDisponiveis;
    }
}