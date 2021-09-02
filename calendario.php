<?php include('./partes/header.php') // Header do html junto do bootstrap?>
<?php include('./partes/navbar.php') // Navbar e Imagem do site?>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;"> <!-- Imagem SVG do simbolo de Sucesso! !-->
        <symbol id="check-circle-fill" fill="green" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
    </svg>
    <section class="bg-cor">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <h1 class="text-center bg-navcor text-white py-3">Plano de Ações</h1>
                    <h2 class="text-center ">Eventos e Sábados Letivos</h2>
                    <ul class="list-group justify-content-center fs-17">
                        <!-- Lista dos Eventos e dos Sábados Letivos, o SVG se refere ao simbolo de Sucesso! 
                            Para se manter o espaço do simbolo para os eventos que ainda não foram realizado, é adicionado a 
                            classe "invisivel" fazendo com que o simbolo de Sucesso não apareça mas continue ocupando o espaço !-->
                        <li class="list-group-item py-3" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            Semana Paulo Freire <b>03/05 - 07/05:</b> Atividades nas Redes Sociais e na Plataforma Teams</li>

                        <li class="list-group-item py-3"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            Semana SIPAT (noite) <b>03/05 - 07/05:</b> Palestras e Atividades nas Redes Sociais</li>

                        <li class="list-group-item py-3"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            Sábado Letivo <b>12/06:</b> Simulado das Matérias da Base Comum</li>

                        <li class="list-group-item py-3"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            Sábado Letivo <b>14/08:</b> Mini-Gincana</li>

                        <li class="list-group-item py-3"><svg class="invisivel bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            Sábado Letivo <b>02/10:</b> (aberto)</li>

                        <li class="list-group-item py-3"><svg class="invisivel bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            Sábado Letivo <b>20/11:</b> Gincana do Conhecimento</li>

                        <li class="list-group-item py-3"><svg class="invisivel bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            Sábado Letivo <b>04/12:</b> Campeonato de Xadrez e Damas</li>

                    </ul>
                    <div class="py-3"></div> <!-- Aumentar o recuo da lista com o footer!-->
                </div>
            </div>
        </div>
    </section>

<?php include('./partes/footer.php') // Footer do html?>