<?php

// declaração de classe
class Categoria {
    
    // declaração de atributos
    // encapsulamento:
    // private = apenas na classe
    // protected = na classe e nas subclasses
    // public = aberta
    protected $codigo_cat;
    protected $nome;
    protected $inicio;
    protected $fim;
    
    
    // construtor é definido pela palavra reservada __construct
    // pode ou não ter parâmetros
    // para um construtor poder não receber parâmetros deve-se
    // definir valores padrão como neste exemplo
    
    function __construct($codigo_cat, $nome, $inicio, $fim) {
        $this->codigo_doenca = $codigo_cat;
        $this->nome = $nome;
        $this->inicio = $inicio;
        $this->fim = $fim;
       
        
    }
    
    // "método mágico" para criação de set genérico
    // ou seja, cria um set que pode ser usado por todos os atributos
    function &__set($prop, $val) {
        $this->$prop = $val;
    }

    // "método mágico" para criação de get genérico
    // ou seja, cria um get que pode ser usado por todos os atributos
    function &__get($prop) {
        return $this->$prop;
    }
    
}
?>