<?php 
require_once 'Pessoa.php'; 
require_once 'Publicacao.php';

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual; 
    private $aberto;
    private $leitor; 

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->pagAtual = 0;
        $this->aberto = false;
    }

    function getTitulo(){
        return $this->titulo; 
    }

    function getAutor(){
        return $this->autor; 
    }

    function getTotPaginas(){
        return $this->totPaginas; 
    }

    function getLeitor(){
        return $this->leitor; 
    }

    function setTitulo($titulo){
        $this->titulo = $titulo; 
    }

    function setAutor($autor){
        $this->autor = $autor; 
    }

    function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas; 
    }

    function setLeitor($pessoa){
        $this->leitor = $pessoa; 
    }

    public function abrir()
    {
        $this->aberto = true; 
    }

    public function fechar()
    {
        $this->aberto = false; 
    }

    public function folhar($p)
    {
        if($this->totPaginas < $p)
        {
            $this->pagAtual = 0; 
        } else 
        {
            $this->pagAtual = $p; 
        }
    }

    public function avancarPag()
    {
        $this->pagAtual ++; 
    }

    public function voltarPag()
    {
        $this->pagAtual --;
    }

    public function detalhes()
    {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Total de páginas: " . $this->totPaginas . "<br>";
        echo "Página atual: " . $this->pagAtual . "<br>";
        echo "Aberto: " . $this->aberto . "<br>";
        echo "Leitor: " . $this->leitor->getNome() . "<br>";
    }
}