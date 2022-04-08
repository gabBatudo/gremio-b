<?php

    include('../partes/header.php');

    if(!isset($_SESSION['user'], $_SESSION['password'])){
        ?>

        <script>
            window.location.href = '../SESSION/login.php';
        </script>

        <?php
    }

    include('../partes/navbar.php');

?>

<?php

    $consulta = "SELECT * FROM postagem";
    $mysql = mysqli_query($connect, $consulta);

?>  
    <section class="bg-cor" style="padding-top: 25px;">
        <div class="container bg-cor">

            <h1 class="text-center">Editar Postagens</h1>

            <div style="margin-bottom: 50px;">
                <a href="./home/Postagem_adicionar.php" style="text-decoration: none;">
                    <button>Adicionar Postagem</button>
                </a>
            </div>
                <?php

                $consulta = "SELECT * FROM postagem";
                $mysql = mysqli_query($connect, $consulta);

                

                echo '<div class="row row-cols-2 row-cols-md-4 g-5 justify-content-center">';
                while($linha = mysqli_fetch_array($mysql)){
                    echo    
                    '<div class="col">
                        <div class="card text-black h-100">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs" style="display: flex; justify-content: space-between">
                                    <li class="nav-item" style="background-color: black; border-radius: 5px;">
                                        <a class="nav-link" href="./home/postagem_alterar.php?id='.$linha["id"].'">Alterar</a>
                                    </li>
                                    <li class="nav-item" style="background-color: red; border-radius: 5px;">
                                        <a class="nav-link" href="./home/postagem_excluir.php?id='.$linha["id"].'">Excluir</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">'.$linha['title'].'</h5>
                            </div>
                                <div class="card-footer">
                                    <b>'.$linha['credits'].'</b>
                                </div>
                            </div>
                        </div>
                    ';
                }
                ?>
                    </div>
        </div>

<br><br>

<?php

    $consulta2 = "SELECT * FROM membros";
    $mysql2 = mysqli_query($connect, $consulta2);

?>
        <div class="container bg-cor">
            <div class="row d-flex justify-content-center py-5">
                <h1 class="text-center">Editar Sobre Nós</h1>
                <div>
                    <a href="./sobre/membros_adicionar.php" style="text-decoration: none;">
                         <button>Adicionar Membro</button>
                    </a>
                </div>
                <!-- Cards dos membros do grêmio!-->
                <div class="row row-cols-2 row-cols-md-4 g-5 justify-content-center">
                    <?php

                        $consulta2 = "SELECT * FROM membros";
                        $mysql2 = mysqli_query($connect, $consulta2);

                        while($linha = mysqli_fetch_array($mysql2)){
                            if($linha['cor'] == 1){
                                $linha['cor'] = 'primary';
                            }else{
                                $linha['cor'] = 'secondary';
                            }
                            
                            echo    
                            '<div class="col">
                                <div class="card text-white bg-'.$linha['cor'].' h-100">
                                    <div class="card-header">
                                        <ul class="nav nav-tabs card-header-tabs" style="display: flex; justify-content: space-between">
                                            <li class="nav-item" style="background-color: black; border-radius: 5px;">
                                                <a class="nav-link" href="./sobre/membros_alterar.php?id='.$linha["id"].'">Alterar</a>
                                            </li>
                                            <li class="nav-item" style="background-color: red; border-radius: 5px;">
                                                <a class="nav-link" href="./sobre/membros_excluir.php?id='.$linha["id"].'">Excluir</a>
                                            </li>
                                        </ul>
                                        </div>
                                        <img src="/gremio-b/'.$linha['imagem'].'" class="card-img-top" alt="...">
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
        </div>
    </section>

<?php

    include('../partes/footer.php')

?>