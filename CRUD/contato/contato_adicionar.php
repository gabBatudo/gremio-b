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

    <div class="container">
        <div class="row d-flex justify-content-center">
            <h1 class="text-center">Editar Contato</h1>
            <ul class="list-group justify-content-center fs-17 py-2">
                <li class="list-group-item py-3 fs-4">
                    <form action="contato_criar.php" class="d-flex flex-column justify-content-center align-items-center" method="post">
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

    <?php include('../../partes/footer.php') ?>