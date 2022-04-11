<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $banco = "admgremio";

    $connect = mysqli_connect($host,$user,$pass,$banco);
    if(!$connect){
        echo "Ocorreu um erro fazendo com que o banco de dados, " . $banco . ", não foi conectado!";
    }

    function SESSION_CRUD(){
        session_start();

        if(!isset($_SESSION['user'], $_SESSION['password'])){
            ?>

            <script>
                window.location.href = '../../SESSION/login.php';
            </script>

            <?php
        }
    }
?>