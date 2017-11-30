<?php
    function conect($baza, $host, $login, $haslo)
    {
        if(!$link = mysql_connect($host, $login, $haslo))
        {
            echo "Nie można połączyć z bazą danych";
        }
    }

?>