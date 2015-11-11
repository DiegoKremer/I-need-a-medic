<?php

// declaração de classe
class Doenca {
    
    // declaração de atributos
    // encapsulamento:
    // private = apenas na classe
    // protected = na classe e nas subclasses
    // public = aberta
    protected $codigo_doenca;
    protected $nome;
    protected $sintoma_1;
    protected $sintoma_2;
    protected $sintoma_3;
    protected $sintoma_4;
    protected $sintoma_5;
    protected $sintoma_6;
    protected $sintoma_7;
    protected $sintoma_8;
    protected $genero;
    protected $categoria;
    
    // construtor é definido pela palavra reservada __construct
    // pode ou não ter parâmetros
    // para um construtor poder não receber parâmetros deve-se
    // definir valores padrão como neste exemplo
    
    function __construct($codigo_doenca, $nome, $sintoma_1, $sintoma_2, $sintoma_3, $sintoma_4, $sintoma_5, $sintoma_6, $sintoma_7, $sintoma_8, $genero, $categoria) {
        $this->codigo_doenca = $codigo_doenca;
        $this->nome = $nome;
        $this->sintoma_1 = $sintoma_1;
        $this->sintoma_2 = $sintoma_2;
        $this->sintoma_3 = $sintoma_3;
        $this->sintoma_4 = $sintoma_4;
        $this->sintoma_5 = $sintoma_5;
        $this->sintoma_6 = $sintoma_6;
        $this->sintoma_7 = $sintoma_7;
        $this->sintoma_8 = $sintoma_8;
        $this->genero = $genero;
        $this->categoria = $categoria;
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