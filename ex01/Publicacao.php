<?php 

interface Publicacao
{
    public function abrir();
    public function fechar();
    public function folhar($p);
    public function avancarPag();
    public function voltarPag();
}