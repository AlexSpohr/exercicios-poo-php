<?php 
require_once 'Livro.php';

class Biblioteca 
{ 
    private $livros = array(); 

    public function adicionar($livro) 
    {
        $this->livros[] = $livro; 
        echo "Livro adiocionado <br> <hr>"; 
    }

    public function remover($titulo) 
    {
        foreach ($this->livros as $chave => $livro) 
        {
            if ($livro->getTitulo() === $titulo)
                unset($this->livros[$chave]);
                echo "Livro removido <br> <hr>";
                break; 
        }
    }

    public function verificarDisponivel($titulo) 
    {
        foreach ($this->livros as $livro) 
        {
            if ($livro->getTitulo() === $titulo && $livro->getNumCopiasDisponiveis() > 0) 
            {
                echo "Livro disponível <br> <hr>";
                break;
            }else { 
                echo "Livro indisponível <br> <hr>";
                break;
            }
        }
    }   

    public function listarLivros() 
    {
        foreach ($this->livros as $livro) 
        {
            echo "Título: " . $livro->getTitulo() . "<br>";
            echo "Autor: " . $livro->getAutor() . "<br>";
            echo "Ano de Publicação: " . $livro->getAnoPublicacao() . "<br>";
            echo "Cópias Disponíveis: " . $livro->getNumCopiasDisponiveis() . "<br>";
            echo "<hr>";
        } 
    }

    public function emprestar($titulo) 
    {
        foreach ($this->livros as $livro) 
        {
            if ($livro->getTitulo() === $titulo && $livro->getNumCopiasDisponiveis() > 0) 
            {
                $livro->setNumCopiasDisponiveis($livro->getNumCopiasDisponiveis() - 1);
                echo "Livro emprestado <br> <hr>"; 
            }
        }
    }
    public function devolver($titulo) 
    {
        foreach ($this->livros as $livro) 
        {
            if ($livro->getTitulo() === $titulo && $livro->getNumCopiasDisponiveis() > 0) 
            {
                $livro->setNumCopiasDisponiveis($livro->getNumCopiasDisponiveis() + 1);
                echo "Livro devolvido <br> <hr>";
            } 
         }
    }
}

$livro[0] = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", 1954, 5); 
$livro[1] = new Livro("1984", "George Orwell", 1949, 3); 

$biblioteca = new Biblioteca();
$biblioteca->adicionar($livro[0]);
$biblioteca->adicionar($livro[1]);
$biblioteca->listarLivros(); 
$biblioteca->remover("1");
$biblioteca->verificarDisponivel("1984"); 





