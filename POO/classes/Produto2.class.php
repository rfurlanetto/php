<?php

class Produto{
    
    public $codigo;
    public $descricao;
    public $preco;
    public $quantidade;
    
    function imprimeEtiquetas()
    {
        print "Código: {$this->codigo} <br>\n";
        print "Descrição: {$this->descricao} <br>\n";
    }
    
    
}