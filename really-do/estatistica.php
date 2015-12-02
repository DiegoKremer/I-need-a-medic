<?php
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
        $doenca = $_GET['doenca_principal'];
        $sintoma1 = $_GET['sintoma1'];
        $sintoma2 = $_GET['sintoma2'];
        $sintoma3 = $_GET['sintoma3'];
        $sintoma4 = $_GET['sintoma4'];
        $sintoma5 = $_GET['sintoma5'];
        $sintoma6 = $_GET['sintoma6'];
        $sintoma7 = $_GET['sintoma7'];
        $sintoma1 = $_GET['sintoma8'];
        $genero = $_GET['genero'];
        $dataest = date(d/m/Y);
        $hora = date(H-i-s);
                
        
            require("conecta.inc");
            conecta_bd() or die("Não é possível conectar-se ao servidor.");
            mysql_query("INSERT INTO estatistica (usuario, idade) VALUES ('$nome', '$idade')")
                    or die("Não é possível gravar os dados!");  
?>


