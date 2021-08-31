<?php include('./partes/header.php') // Header do html junto do bootstrap?>
<?php include('./partes/navbar.php') // Navbar e Imagem do site?>
<?php include('./partes/sobreMembros.php') // Dados dos Cards ?>

    <section class="bg-cor">
        <div class="container bg-cor">
            <div class="row d-flex justify-content-center py-5">
                <h1 class="text-center">Sobre nós</h1>
                <h3 class="text-center">O Grêmio</h3>
                <div class="row row-cols-2 row-cols-md-4 g-5">
                    <?php
                        foreach ($rows as $row) {
                            print 
                            '<div class="col">
                                <div class="card text-white bg-'.$row['cor'].' h-100">
                                    <img src="'.$row['imagem'].'" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row['nome'].'</h5>
                                        <p class="card-text">'.$row['proposta'].'</p>
                                    </div>
                                    <div class="card-footer">
                                        <b>'.$row['cargo'].'</b>
                                    </div>
                                </div>
                            </div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php include('./partes/footer.php') // Footer do html?>