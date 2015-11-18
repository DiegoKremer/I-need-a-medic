<?php

// declaração de classe
class Sintoma {
    
    // declaração de atributos
    // encapsulamento:
    // private = apenas na classe
    // protected = na classe e nas subclasses
    // public = aberta
    protected $codigo_sintoma;
    protected $nome;
    protected $descricao;
    
    
    // construtor é definido pela palavra reservada __construct
    // pode ou não ter parâmetros
    // para um construtor poder não receber parâmetros deve-se
    // definir valores padrão como neste exemplo
    
    function __construct($codigo_sintoma = "", $nome = "", $descricao = "") {
        $this->codigo_sintoma = $codigo_sintoma;
        $this->nome = $nome;
        $this->descricao = $descricao;
        
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
    
    
    // método para impressão de dados do objeto
    function __toString() {
        return " " . $this->codigo_sintoma . " " .$this->nome . " "
                . $this->descricao;
    }
    
}
?>