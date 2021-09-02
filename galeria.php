<?php include('./partes/header.php') // Header do html junto do bootstrap?>
<?php include('./partes/navbar.php') // Navbar e Imagem do site?>
<?php include('./partes/galeriaR.php') // Dados das Imagens e dos Textos?>

    
    <section class="bg-cor">
        <div class="container">
            <div class="row">
                <div class="col ">
                <h1 class="text-center bg-navcor text-white py-3">Plano de Ações</h1>
                <h2 class="text-center" style="padding-bottom: 15px;">Caricaturas</h2>
                <!-- Carrossel de Imagens !-->
                <div id="carouselExampleDark" class="carousel carousel-dark slide" style="width: 400px; margin: 0 auto">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <?php
                            // Loop para que se tenha o valor necessario de Indicators no carrossel
                            $i = 1;
                            while ($i <= 28) {
                                print '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$i.'" aria-label="Slide '.$i.'"></button>';
                                $i++;
                            }
                        ?>
                    </div>
                    <div class="carousel-inner">
                        <!-- Na parte das imagens, é preciso que se tenha um item com a classe active nele,
                        SE NÃO o carrossel não irá ficar visivel!-->
                        <div class="carousel-item active">
                            <img src="./imagens/caricaturas/1.jpg" alt="caricaturas" class="d-block w-100">
                        </div>
                        <?php
                            // Loop que pega as imagens da pasta "./imagens/caricaturas" e adiciona no carroussel
                            $i = 2;
                            while ($i <= 28) {
                                print '<div class="carousel-item">
                                        <img src="./imagens/caricaturas/'.$i.'.jpg" alt="caricaturas" class="d-block w-100">
                                </div>';
                                $i++;
                            }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <!-- Carrossel de Textos !-->
                <h2 class="text-center" style="padding-bottom: 15px; padding-top: 15px">Redações</h2>
                <div id="carouselControls" class="carousel carousel-dark slide">    
                    <div class="carousel-inner">
                        <!-- Igual no de imagens, é necessario um active para que ele fique visivel!-->
                        <div class="carousel-item active">
                            <p class='texto text-justify'>Perguntas sobre Paulo Freire <br /><br />
                                1.	Quem é Paulo Freire?<br />
                                Resp. Paulo Freire (1921-1997) o professor da Universidade Federal de Pernambuco foi o mais célebre educador brasileiro, com atuação e reconhecimento internacionais. Conhecido principalmente pelo método de alfabetização de adultos que leva seu nome, ele desenvolveu um pensamento pedagógico assumidamente político.<br />
                                <br />2.	Quando nasceu e onde viveu?<br />
                                Resp. Batizado com o nome de Paulo Reglus Neves Freire, nasceu em 19 de setembro de 1921, em Recife, Pernambuco; viveu a maior parte de sua vida aqui no Brasil, mas também viveu outros países do mundo.<br />
                                <br />3.	Para ele, qual o maior objetivo da educação?<br />
                                Resp. O objetivo é conscientizar o aluno. Isso significa, em relação às parcelas desfavorecidas da sociedade, levá-las a entender sua situação de oprimidas e agir em favor da própria libertação.<br />
                                <br />4.	Qual seu principal livro? E qual o seu objetivo?<br />
                                Resp. Pedagogia do Oprimido. O livro propõe a libertação das massas através da educação. Contudo, Freire apresenta, no livro, a proposição de que o educando tem papel fundamental nesse processo.<br />
                                <br />5.	Como deveria ser a escola segundo ele?<br />
                                Resp. Toda educação é política, e não existe neutralidade. Aprender é um ato revolucionário. Por meio da educação, e de maneira coletiva, o indivíduo deve tomar consciência de sua condição histórica, assumir o controle de sua trajetória e conhecer sua capacidade de transformar o mundo.<br />
                                <br />6.	Cite frases dos seus livros.<br />
                                Resp.  “Ninguém liberta ninguém, ninguém se liberta sozinho: os homens se libertam em comunhão”. (Pedagogia do oprimido, 1968);<br />
                                “Quando penso em minha terra, penso sobretudo no sonho possível – mas nada fácil – da invenção democrática de nossa sociedade”. (À sombra desta mangueira, 1995).<br />
                                <br />7.	O que aconteceu após sua prisão?<br />
                                Resp. Foi preso durante o regime militar sob a justificativa de doutrinação marxista e subversão em 1964, durante 72 dias. Partiu para o exílio no Chile, onde trabalhou por cinco anos no Instituto de Capacitação e Investigação em Reforma Agrária (Icira) e escreveu seu principal livro: “Pedagogia do oprimido” (1968). Freire ainda passou por Estados Unidos e Suíça.<br />
                                <br />8.	Quando foi implantado o seu Método?<br />
                                Resp. Sistematizou, em 1962, ideias que vinha desenvolvendo e testando havia alguns anos, propondo um novo método de educação de adultos, combinando de forma bastante original conquistas da teoria da comunicação, da psicologia e da didática.<br />
                                <br />9.	Por que Paulo Freire é patrono da educação?<br />
                                Resp. Pois, seu pensamento visava que o educando precisaria ser considerado como ser social, histórico, cultural, político e afetivo. A pedagogia, além de acolher as diversidades e os diferentes saberes e demandas, deveria pautar-se pela escuta e pelo diálogo.<br />
                                <br />10.	 Conte sobre a sua família.<br />
                                Resp. Seus pais chamavam-se Joaquim Temístocles Freire e Edeltrudes Neves Freire. Teve 5 filhos e seus nomes são: Lutgardes Costa Freire, María de Fátima Costa Freire, Maria Madalena Costa Freire, Joaquim Costa Freire, Maria Christina Costa Freire<br />
                                <br />Feito por:<br />
                                Gabriella Fernanda C. dos santos Terossi<br />
                                Gabriela Katerine Silva <br />
                                Isabella Cristine P. de Araujo<br />
                                Joao Vitor dos Santos e Raissa M. Rogéro.<br />
                            </p>
                        </div>
                            <?php
                                // Loop que pega os textos do "./partes/galeriaR.php"
                                foreach ($textos as $redacoes) {
                                    print '<div class="carousel-item">'
                                        .$redacoes.
                                    '</div>';
                                }
                            ?>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>                    
                </div>
                <div class="py-3"></div> <!-- Fazer um espaçamento entre o carrossel e o footer !-->
            </div>
        </div>
    </section>
<?php include('./partes/footer.php') // Footer do html?>