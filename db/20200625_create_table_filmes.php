<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo "\n tabela filmes apagada\n ";

$sql = "CREATE TABLE filmes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(200) NOT NULL,
    poster VARCHAR (200),
    sinopse TEXT,
    nota DECIMAL(3,1),
    favorite INT DEFAULT 0
    )
";

if ($bd->exec($sql)) 
    echo "\n tabela filmes criada\n ";
else
    echo "\n erro ao criar tabela filmes \n ";
