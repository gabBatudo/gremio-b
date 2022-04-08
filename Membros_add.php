<?php
    include("./bd/connect.php");


    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $proposta = $_POST['proposta'];
    $cor = $_POST['cor'];
    $imagem = $_POST['imagem'];

    $script = "INSERT INTO membros (nome, cargo, proposta, cor, imagem) VALUES(
        '$nome',
        '$cargo',
        '$proposta',
        '$cor',
        '$imagem'
    )";

    $mysqli = mysqli_query($connect, $script);

    if (!$mysqli){
        ?>
            <script>
                alert("Ocorreu um erro para adicionar o membro. Tente novamente!")
                window.location.href='crud.php'
            </script>
        <?php
    } else {
        ?>
        <script>
            window.location.href="crud.php"
        </script>
        <?php
    }

?>