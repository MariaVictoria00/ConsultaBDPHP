<?php

//conetca com seu banco de dados local
$mysqli = new mysqli("localhost", "root", "liam02", "Noticias");

//cria um array
$Array = array();

// verifica se fez a conexão com o bd
if ($mysqli->connect_errno) {
    printf("Erro ao conectar no banco de dado: %s\n", $mysqli->connect_error);
    exit();
}

// seleciona a base de dados em que vamos trabalhar
$query = "SELECT * FROM noticias";

if ($result = $mysqli->query($query)) {
  
// busca matriz associativa 
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $Array[] = $row;
    }

    //retorna em json
    echo  json_encode($Array);
    

     //mostrar resultados
    $result->free();
    
}
