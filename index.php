<?php include('./partes/header.php') // Header do html junto do bootstrap?>
<?php include('./partes/navbar.php') // Navbar e Imagem do site?>

    <section class="bg-cor" id="secIndex">
        <div class="container bg-cor">

            <?php

            $script = "SELECT * FROM postagem";
            $execSelect = mysqli_query($connect, $script);

            while($linha = mysqli_fetch_array($execSelect)){
                echo "<div class='row d-flex justify-content-center py-5'>
                        <div class='col-auto'>
                            <div class='card' style='width: 45rem;'>
                            <div class='card-body d-flex flex-column justify-content-center'>
                                <h5 class='card-title text-center'>".$linha['title']."</h5>
                                <pre class='card-text text-justify lados' style='width: 100%; white-space: pre-line;'>".$linha['content']."</pre>
                            </div>
                            <div class='card-footer'>
                              Escrito por <cite title='Escrito por'>".$linha['credits']."</cite>
                            </div>
                        </div>
                     </div>";
            }
            ?>
        </div>
    </section>
    
<?php include('./partes/footer.php') // Footer do html?>