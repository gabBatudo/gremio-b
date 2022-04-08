<?php
    include('../../partes/header.php');
    if(!isset($_SESSION['user'], $_SESSION['password'])){
        ?>

        <script>
            window.location.href = '../../SESSION/login.php';
        </script>

        <?php
    }
    include('../../partes/navbar.php');
?>

    <section class="bg-cor" id="secIndex">
        <div class="container bg-cor">
            <div class='row d-flex justify-content-center py-5'>
                <div class='col-auto'>
                    <h3 style="text-align: center;">Criando Postagem..</h3>
                    <form action="./postagem_criar.php" method="POST">
                        <div class='card' style='width: 45rem;'>
                            <div class='card-body d-flex flex-column justify-content-center'>
                                <h5 class='card-title text-center'><input type="text" name="title" placeholder="Digite o titulo" style="text-align: center;" /></h5>
                                <p class='card-text text-justify lados'><textarea name="content" placeholder="Digite o conteudo" rows="5" cols="65"></textarea></p>
                            </div>
                            <div class='card-footer'>
                                Escrito por <cite title='Escrito por'><input type="text" name="credits" placeholder="Digite os creditos" /></cite>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center py-3">
                            <button class="alterar">Criar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
    include('../../partes/footer.php')
?>