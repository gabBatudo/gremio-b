<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "admgremio";

    $connect = mysqli_connect($host,$user,$pass,$banco);
    if(!$connect){
        echo "Ocorreu um erro fazendo com que o banco de dados, " . $banco . ", não foi conectado!";
    }
?>