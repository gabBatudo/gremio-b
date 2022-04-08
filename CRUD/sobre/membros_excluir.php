<?php

    include("../../bd/connect.php");

    $id = $_GET["id"];

    echo $id;

    $script = "DELETE FROM membros WHERE id = '$id'";

    $exec_mysqli_delete = mysqli_query($connect, $script);

    if(!$exec_mysqli_delete){
        ?>
        <script>
            alert("Membro não excluido!");
            window.location.href = "../index.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            window.location.href = "../index.php";
        </script>
        <?php
    }

?>