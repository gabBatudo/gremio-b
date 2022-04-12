<?php
    include('../../partes/navbar.php');

    $id = $_GET['id'];

    $script = "SELECT * FROM postagem WHERE id = '$id'";
    $exec_mysqli = mysqli_query($connect, $script);

    while($row = mysqli_fetch_array($exec_mysqli)) {
        $title = $row['title'];
        $content = $row['content'];
        $credits = $row['credits'];
    }

?>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <h1 class="text-center">Editar Contato</h1>
                <ul class="list-group justify-content-center fs-17 py-2">
                    <li class="list-group-item py-3 fs-4">
                        <form action="contato_criar.php" class="d-flex flex-column justify-content-center align-items-center" method="post">
                            <?php

                            ?>
                            <select name="logo" id="logo">
                                <option value="0">Facebook</option>
                                <option value="1">Instagram</option>
                            </select>
                            <input type="text" name="rede" id="rede" placeholder="Insira o nome da rede">
                            <input type="text" name="link" id="link" placeholder="Insira o link">
                    </li>
                </ul>
                            <button type="submit" class="w-25">Criar</button>
                        </form>
                <div class="py-3"></div> <!-- Aumentar o recuo da lista com o footer!-->
            </div>
        </div>
    </section>
    
<?php
    include('../../partes/footer.php')
?>