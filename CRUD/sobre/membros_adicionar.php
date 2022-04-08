<?php
    include('../../partes/header.php');
    include('../../partes/navbar.php');
?>

    <section class="bg-cor" id="secSobre">
        <div class="container bg-cor">
            <div class="row d-flex justify-content-center py-4">
                <!-- Cards dos membros do grêmio!-->
                <h3 class="text-center p-2">Adicionando Membro...</h3>
                <div class="row row-cols-2 row-cols-md-4 gx-5 gy-2 justify-content-center">
                    <div class="col">
                        <form action="/membros_add.php" method="POST">
                            <div class="card text-white bg-default h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><input type="text" name="nome" placeholder="Digite o nome" /></h5>
                                    <p class="card-text"><textarea name="proposta" placeholder="Digite a proposta" rows="5" cols="29.5">Proposta: </textarea></p>
                                </div>
                                <div class="card-footer">
                                    <b><input type="text" name="cargo" placeholder="Digite o cargo" /></b>
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="cor">Cor:</label>
                                <select class="text-center" name="cor" id="cor">
                                    <option class="bg-primary text-white" value="1">Azul</option>
                                    <option class="bg-secondary text-white" value="2">Cinza</option>
                                </select>
                                <label for="Imagem">Imagem:</label>
                                <input type="text" name="imagem" placeholder="Digite a imagem" />
                            </div>
                            <div class="d-flex justify-content-center py-2">
                                <button class="alterar">Criar</button>
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