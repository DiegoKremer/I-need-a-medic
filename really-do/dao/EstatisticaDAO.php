<?php

// incluir a classe para estabelecimento de herança e utilização de método de conexão
require_once("BancoPDO.php");

// estabelecimento de herança
class EstatisticaDAO extends BancoPDO {

    // no construtor chamada de método de conexão da superclasse e realização de conexão
    public function __construct() {
        $this->conexao = BancoPDO::conexao();
    }

    // método de inserção de dados na base de dados
    // recebimento de objeto com atributos setados
    public function inserir($estatistica) {
        try {

            // preparação de statement para execução de SQL na base
            // casa interrogação corresponde a um valor que será recebido posteriormente
            $stm = $this->conexao->prepare("INSERT INTO Estatistica (codigo_est, usuario, idade, doenca, sintoma_1, sintoma_2, sintoma_3, sintoma_4, sintoma_5"
                    . "sintoma_6, sintoma_7, sintoma_8, genero, categoria, local, dataest, hora) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            echo $estatistica->usuario_est;

            // passagem de valores na ordem correta de entrada
            // corresponde a cada ponto de interrogação na SQL do statement
            $stm->bindValue(1, $estatistica->codigo_est);
            $stm->bindValue(2, $estatistica->usuario_est);
            $stm->bindValue(3, $estatistica->idade);
            $stm->bindValue(4, $estatistica->doenca);
            $stm->bindValue(5, $estatistica->sintoma_1);
            $stm->bindValue(6, $estatistica->sintoma_2);
            $stm->bindValue(7, $estatistica->sintoma_3);
            $stm->bindValue(8, $estatistica->sintoma_4);
            $stm->bindValue(9, $estatistica->sintoma_5);
            $stm->bindValue(10, $estatistica->sintoma_6);
            $stm->bindValue(11, $estatistica->sintoma_7);
            $stm->bindValue(12, $estatistica->sintoma_8);
            $stm->bindValue(13, $estatistica->genero);
            $stm->bindValue(14, $estatistica->categoria);
            $stm->bindValue(15, $estatistica->local);
            $stm->bindValue(16, $estatistica->dataest);
            $stm->bindValue(17, $estatistica->hora);
            

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
