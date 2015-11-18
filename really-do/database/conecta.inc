<?php

function conecta_bd() {

    $link = mysql_pconnect("localhost", "root", "usbw");

    if ($link && mysql_select_db("sadmbd"))
        return($link);

    return(FALSE);
}

?>