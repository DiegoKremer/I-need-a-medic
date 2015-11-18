<?php

// incluir a classe para estabelecimento de herança e utilização de método de conexão
require_once("BancoPDO.php");

// estabelecimento de herança
class SintomaDAO extends BancoPDO {

    // no construtor chamada de método de conexão da superclasse e realização de conexão
    public function __construct() {
        $this->conexao = BancoPDO::conexao();
    }

    // método de inserção de dados na base de dados
    // recebimento de objeto com atributos setados
    public function inserir($sintoma) {
        try {

            // preparação de statement para execução de SQL na base
            // casa interrogação corresponde a um valor que será recebido posteriormente
            $stm = $this->conexao->prepare("INSERT INTO sintoma (codigo, nome, descricao) VALUES (?, ?, ?)");

            echo $sintoma->nome;

            // passagem de valores na ordem correta de entrada
            // corresponde a cada ponto de interrogação na SQL do statement
            $stm->bindValue(1, $sintoma->codigo_sintoma);
            $stm->bindValue(2, $sintoma->nome);
            $stm->bindValue(3, $sintoma->descricao);
            
            

            // realiza a execução do código na base
            if ($stm->execute()) {
                echo "Dados inseridos com sucesso! <br/>";
                header("Location: ./index_original.php");
            }


            // tratamento de exceção nativo de PDO
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
    
    // método de visualização de dados na base de dados
    // opcionalmente permite o recebimento de um valor de id para filtro
    public function visualizar($codigo_sintoma = "", $combo = "") {

        try { 

            if($codigo_sintoma == "") {
                $stm = $this->conexao->prepare("SELECT * FROM 'sintoma'");
            } else {
                $stm = $this->conexao->prepare("SELECT * FROM 'sintoma' WHERE codigo = ?");
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
                
                     $ops = "<option value='0'>Selecione o sintoma</option>";
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


