    <nav class="navbar navbar-expand-lg bg-navcor esPaddingTop" id="menu">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" id="brand"><img src="./imagens/brand2.png" alt="" width="60" height="60"></a>
            <div class="collapse navbar-collapse text-uppercase d-flex justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calendario.php">Calendário</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="galeria.php">Galeria</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a href="crud.php" class="nav-link">Crud</a>
                    </li>
                </ul>
                <?php
                    $teste = 3;
                    if(isset($_SESSION['user'], $_SESSION['password'] )){
                        echo '
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    '.$_SESSION["user"].'
                                </a>
                            
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Crud</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="logout.php">Sair</a></li>
                            </ul>
                            </li>
                        </ul>';
                    }else{
                        echo '
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="login.php" class="nav-link">Login</a>
                            </li>
                        </ul>';
                    }

                ?>
            </div>
        </div>
    </nav>


    <section class="bg-cor" id="secBanner"> <!-- Banner do Grêmio!-->
        <div class="container" id="siteCapa">
            <div class="row">
                <img src="./imagens/capa2.jpg" alt="" class="image-fluid">
            </div>
        </div>
    </section>