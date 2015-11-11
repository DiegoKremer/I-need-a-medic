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

            echo $ambiente->nome;

            // passagem de valores na ordem correta de entrada
            // corresponde a cada ponto de interrogação na SQL do statement
            $stm->bindValue(1, $ambiente->codigo_doenca);
            $stm->bindValue(2, $ambiente->nome);
            $stm->bindValue(3, $ambiente->sintoma_1);
            $stm->bindValue(3, $ambiente->sintoma_2);
            $stm->bindValue(3, $ambiente->sintoma_3);
            $stm->bindValue(3, $ambiente->sintoma_4);
            $stm->bindValue(3, $ambiente->sintoma_5);
            $stm->bindValue(3, $ambiente->sintoma_6);
            $stm->bindValue(3, $ambiente->sintoma_7);
            $stm->bindValue(3, $ambiente->sintoma_8);
            $stm->bindValue(3, $ambiente->genero);
            $stm->bindValue(3, $ambiente->categoria);
            

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
