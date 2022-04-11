<?php

    include("../../bd/connect.php");

    SESSION_CRUD();


    $logo = $_POST['logo'];
    $rede = $_POST['rede'];
    $link = $_POST['link'];

    $script = "INSERT INTO contato (rede, link, logo) VALUES(
        '$rede',
        '$link',
        '$logo'
    )";

    $mysqli = mysqli_query($connect, $script);

    if (!$mysqli){
        ?>
            <script>
                alert("Ocorreu um erro para salvar a postagem. Tente novamente!")
                window.location.href='./contato_adicionar.php'
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