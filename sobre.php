<?php include('./partes/header.php') // Header do html junto do bootstrap?>
<?php include('./partes/navbar.php') // Navbar e Imagem do site?>

    <section class="bg-cor" id="secSobre">
        <div class="container bg-cor">
            <div class="row d-flex justify-content-center py-5">
                <h1 class="text-center">Sobre nós</h1>
                <h3 class="text-center">O Grêmio</h3>
                <!-- Cards dos membros do grêmio!-->
                <div class="row row-cols-2 row-cols-md-4 g-5">
                    <?php

                        $script = "SELECT * FROM membros";
                        $execSelect = mysqli_query($connect, $script);

                        while($linha = mysqli_fetch_array($execSelect)){
                            if($linha['cor'] == 1){
                                $linha['cor'] = 'primary';
                            }else{
                                $linha['cor'] = 'secondary';
                            }
                            
                            echo    '<div class="col">
                                        <div class="card text-white bg-'.$linha['cor'].' h-100">
                                            <img src="'.$linha['imagem'].'" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">'.$linha['nome'].'</h5>
                                                <p class="card-text">'.$linha['proposta'].'</p>
                                            </div>
                                            <div class="card-footer">
                                                <b>'.$linha['cargo'].'</b>
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