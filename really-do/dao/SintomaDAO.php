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
            $stm = $this->conexao->prepare("INSERT INTO Sintoma (codigo_sintoma, nome, descricao) VALUES (?, ?, ?)");

            echo $sintoma->usuario_sintoma;

            // passagem de valores na ordem correta de entrada
            // corresponde a cada ponto de interrogação na SQL do statement
            $stm->bindValue(1, $sintoma->codigo_sintoma);
            $stm->bindValue(2, $sintoma->nome);
            $stm->bindValue(3, $sintoma->descricao);
            
            

            // realiza a execução do código na base
            if ($stm->execute()) {
                echo "Dados inseridos com sucesso! <br/>";
                header("Location: ./index.php");
            }


            // tratamento de exceção nativo de PDO
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

}


