<?php

require(".\database\conecta.inc");
require("");

function verificaDoenca($s1, $s2, $s3, $s4, $s5, $s6, $s7, $s8) {
    $sint_combo1 = $s1;
    if ($s2 == null) {
        $s2 = "";
    } else {
        $sint_combo2 = $s2;
    }

    $doenca_principal = "Insira os sintomas para pesquisarmos!";
    $doenca1 = mysql_query("SELECT * FROM doenca") or die("Não é possível consultar sintomas.");
    while ($linhaDoenca = mysql_fetch_array($doenca1)) {
        $doenca_sintoma1 = $linhaDoenca ["sintoma_1"];
        if ($doenca_sintoma1 == $sint_combo1) {
            $doenca_principal = $linhaDoenca ["nome"];
        }
    }

    //Imprime o nome da doença.
    return $doenca_principal;
}

?>
