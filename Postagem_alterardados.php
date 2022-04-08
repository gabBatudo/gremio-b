<?php

    include("./bd/connect.php");

    $title =     $_POST["title"];
    $content = $_POST["content"];
    $credits =   $_POST["credits"];
    $id =       $_POST["id"];

    $script = "UPDATE postagem SET title = '$title',
                                   content = '$content',
                                   credits = '$credits' WHERE id = '$id'
    ";
    $mysql = mysqli_query($connect, $script);

    if (!$mysql){
        ?>
        <script>
            alert("Dados não atualizados!");
            window.location.href="crud.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            window.location.href="crud.php";
        </script>
        <?php
    }

?>