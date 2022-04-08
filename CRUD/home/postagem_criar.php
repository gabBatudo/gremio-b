<?php

    SESSION_CRUD();

    include("../../bd/connect.php");


    $title = $_POST['title'];
    $content = $_POST['content'];
    $credits = $_POST['credits'];

    $script = "INSERT INTO postagem (title, content, credits) VALUES(
        '$title',
        '$content',
        '$credits'
    )";

    $mysqli = mysqli_query($connect, $script);

    if (!$mysqli){
        ?>
            <script>
                alert("Ocorreu um erro para salvar a postagem. Tente novamente!")
                window.location.href='./postagem_adicionar.php'
            </script>
        <?php
    } else {
        ?>
            <script>
                window.location.href="../index.php"
            </script>
        <?php
    }

?>