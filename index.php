<?php

//conetca com seu banco de dados local
$link = mysqli_connect("localhost", "root", "liam02", "Noticias");

// verifica se fez a conexão com o bd
if (mysqli_connect_errno()) {
    printf("Erro ao conectar no banco de dado: %s\n", mysqli_connect_error());
    exit();
}

// seleciona a base de dados em que vamos trabalhar
$query = "SELECT * FROM noticias";

if ($result = mysqli_query($link, $query)) {

// busca matriz associativa 
    while ($row = mysqli_fetch_assoc($result)) {   
       printf ("%s (%s) %s %s\n",$oJson->id = $row["id"],$row["titulo"], $row["data"], $row["texto"]);
    }

    //mostrar resultados
    mysqli_free_result($result);
}

?>
