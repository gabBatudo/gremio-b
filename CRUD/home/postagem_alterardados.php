<?php

    include("../../bd/connect.php");

    SESSION_CRUD();

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
            window.location.href="../index.php";
        </script>
        <?php
    } else {
        ?>
        <script>
            window.location.href="../index.php";
        </script>
        <?php
    }

?>