<?php

    include("../../bd/connect.php");

    $nome =        $_POST["nome"];
    $cargo =        $_POST["cargo"];
    $proposta =     $_POST["proposta"];
    $cor =          $_POST["cor"];
    $imagem =       $_POST["imagem"];
    $id =           $_POST["id"];

    $script = "UPDATE membros SET   nome =      '$nome',
                                    cargo =     '$cargo',
                                    proposta =  '$proposta',
                                    cor =       '$cor',
                                    imagem =    '$imagem' WHERE id = '$id'
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