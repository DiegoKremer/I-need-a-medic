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
    
    function __construct($codigo_sintoma, $nome, $descricao) {
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
    
    
    // método de visualização de dados na base de dados
    // opcionalmente permite o recebimento de um valor de id para filtro
    public function visualizar($codigo_sintoma = "", $combo = "") {

        try { 

            if($codigo_sintoma == "") {
                $stm = $this->conexao->prepare("SELECT * FROM sintoma");
            } else {
                $stm = $this->conexao->prepare("SELECT * FROM sintoma WHERE codigo = ?");
                $stm->bindParam(1, $codigo_sintoma, PDO::PARAM_INT);
            }

            if($stm->execute()) 
            {
                if($combo == ""){
                
                // Para cada resultado encontrado...
                $tabela = "<table><tr>"
                        ."<td>Codigo</td>"
                        ."<td>Nome</td>"
                        ."<td>Descricao</td>"
                        ."</tr>";
            
                while($dados = $stm->fetch(PDO::FETCH_OBJ)) {
                   $tabela .= "<tr>"
                             ."<td>".$dados->codigo_sintoma."</td>"
                             ."<td>".$dados->nome."</td>"
                             ."<td>".$dados->descricao."</td>"
                             ."</tr>"; 
                }
                
                $tabela .= "</table>";
            
                echo $tabela;
                
                 }else{
                
                     $ops = "<option value='0'>Selecione um Sintoma</option>";
                    while($dados = $stm->fetch(PDO::FETCH_OBJ)) {
                       $ops .= "<option value='".$dados->codigo_sintoma."'>".$dados->nome."</option>";
                    }
                    echo $ops;
                
            }
                   
            }          

        } catch(PDOException $e) {
                echo "Erro: ".$e->getMessage();
        }

    }
    
}
?>