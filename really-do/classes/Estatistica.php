<?php

// declaração de classe
class Estatistica {
    
    // declaração de atributos
    // encapsulamento:
    // private = apenas na classe
    // protected = na classe e nas subclasses
    // public = aberta
    protected $codigo_est;
    protected $usuario_est;
    protected $idade;
    protected $doenca;
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
    protected $local;
    protected $data;
    protected $hora;
    
    // construtor é definido pela palavra reservada __construct
    // pode ou não ter parâmetros
    // para um construtor poder não receber parâmetros deve-se
    // definir valores padrão como neste exemplo
    
    function __construct($codigo_est, $usuario_est, $idade, $doenca, $sintoma_1, $sintoma_2, $sintoma_3, $sintoma_4, $sintoma_5, $sintoma_6, $sintoma_7, $sintoma_8, $genero, $categoria, $local, $dataest, $hora) {
        $this->codigo_doenca = $codigo_est;
        $this->usuario_est = $usuario_est;
        $this->idade = $idade;
        $this->doenca = $doenca;
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
        $this->local = $local;
        $this->dataest = $dataest;
        $this->hora = $hora;
        
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