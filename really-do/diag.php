<?php

require(".\database\conecta.inc");
require("");

function verificaDoenca($s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8) {
        
            $sint_combo1 = $s1;
            $sint_combo2 = $s2;
            $sint_combo2 = $s3;
            $sint_combo2 = $s4;
            $sint_combo2 = $s5;
            $sint_combo2 = $s6;
            $sint_combo2 = $s7;
            $sint_combo2 = $s8;
        
    try {
        

        $doenca1 = mysql_query("SELECT * FROM doenca") or die("Não é possível consultar sintomas.");
        while ($linhaDoenca = mysql_fetch_array($doenca1)) {
            $doenca_sintoma1 = $linhaDoenca ["sintoma_1"];
            if ($doenca_sintoma1 == $sint_combo1) {
                $doenca_principal = $linhaDoenca ["nome"];
            } else {
                $doenca_principal = "Insira os sintomas para pesquisarmos!";
            }
        }

        //Imprime o nome da doença.
        return $doenca_principal;

        } catch (Exception $e) {
            echo "Não foi possível verificar sua doença. Verifique os dados fornecidos.";
    }
}

