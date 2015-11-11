<?php

// incluir a classe para estabelecimento de herança e utilização de método de conexão
require_once("BancoPDO.php");

// estabelecimento de herança
class DoencaDAO extends BancoPDO {

    // no construtor chamada de método de conexão da superclasse e realização de conexão
    public function __construct() {
        $this->conexao = BancoPDO::conexao();
    }

    // método de inserção de dados na base de dados
    // recebimento de objeto com atributos setados
    public function inserir($doenca) {
        try {

            // preparação de statement para execução de SQL na base
            // casa interrogação corresponde a um valor que será recebido posteriormente
            $stm = $this->conexao->prepare("INSERT INTO Doenca (codigo_doenca, nome, sintoma_1, sintoma_2, sintoma_3, sintoma_4, sintoma_5"
                    . "sintoma_6, sintoma_7, sintoma_8, genero, categoria) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            echo $doenca->usuario_est;

            // passagem de valores na ordem correta de entrada
            // corresponde a cada ponto de interrogação na SQL do statement
            $stm->bindValue(1, $doenca->codigo_doenca);
            $stm->bindValue(2, $doenca->usuario_est);
            $stm->bindValue(3, $doenca->sintoma_1);
            $stm->bindValue(4, $doenca->sintoma_2);
            $stm->bindValue(5, $doenca->sintoma_3);
            $stm->bindValue(6, $doenca->sintoma_4);
            $stm->bindValue(7, $doenca->sintoma_5);
            $stm->bindValue(8, $doenca->sintoma_6);
            $stm->bindValue(9, $doenca->sintoma_7);
            $stm->bindValue(10, $doenca->sintoma_8);
            $stm->bindValue(11, $doenca->genero);
            $stm->bindValue(12, $doenca->categoria);
            

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
