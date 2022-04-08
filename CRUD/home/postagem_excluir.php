<?php

    include("../../bd/connect.php");

    $id = $_GET["id"];

    echo $id;

    $script = "DELETE FROM postagem WHERE id = '$id'";

    $exec_mysqli_delete = mysqli_query($connect, $script);

    if(!$exec_mysqli_delete){
        ?>
        <script>
            alert("Postagem não excluida!");
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