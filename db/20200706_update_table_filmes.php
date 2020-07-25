<?php

$bd = new SQLite3("./db/filmes.db");

$sql = "ALTER RABLE filmes ADD COLUMN favorito INT DEFAULT 0";

if ($bd->exec($sql)) 
    echo "\ntabela filmes alterada com sucesso\n"; 
else
    echo "\n erro ao alterar tabela filmes\n ";