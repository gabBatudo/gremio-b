<?php
    include('../../partes/header.php');
    include('../../partes/navbar.php');

    $id = $_GET['id'];

    $script = "SELECT * FROM membros WHERE id = '$id'";
    $exec_mysqli = mysqli_query($connect, $script);

    while($row = mysqli_fetch_array($exec_mysqli)) {
        $nome = $row['nome'];
        $cargo = $row['cargo'];
        $proposta = $row['proposta'];
        $cor = $row['cor'];
        $imagem = $row['imagem'];
    }

?>

    <section class="bg-cor" id="secSobre">
        <div class="container bg-cor">
            <div class="row d-flex justify-content-center py-4">
                <!-- Cards dos membros do grêmio!-->
                <h3 class="text-center p-2">Editando Membro...</h3>
                <div class="row row-cols-2 row-cols-md-4 gx-5 gy-2 justify-content-center">
                    <div class="col">
                        <form action="./membros_alterardados.php" method="POST">
                            <div class="card text-white bg-default h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><input type="text" name="nome" value="<?php echo $nome ?>" placeholder="Digite o nome" /></h5>
                                    <p class="card-text"><textarea name="proposta" placeholder="Digite a proposta" rows="5" cols="29.5"><?php echo $proposta ?></textarea></p>
                                </div>
                                <div class="card-footer">
                                    <b><input type="text" name="cargo" value="<?php echo $cargo ?>" placeholder="Digite o cargo" /></b>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="cor">Cor:</label>
                                <?php
                                    if($cor == 1){
                                        echo '<select class="text-center" name="cor" id="cor">
                                            <option class="bg-primary text-white" value="1" selected>Azul</option>
                                            <option class="bg-secondary text-white" value="2">Cinza</option>
                                        </select>';
                                    }else{
                                        echo '<select class="text-center"   name="cor" id="cor">
                                            <option class="bg-primary text-white" value="1">Azul</option>
                                            <option class="bg-secondary text-white" value="2" selected>Cinza</option>
                                        </select>';
                                    }
                                ?>
                                <label for="Imagem">Imagem:</label>
                                <input type="text" name="imagem" value="<?php echo $imagem ?>" placeholder="Digite a imagem" />
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <input type='hidden' value="<?php echo $id; ?>" name="id" />
                                <button class="alterar">Alterar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include('../../partes/footer.php')
?>