<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thor Gym</title>
    <!-- Para conectar ao bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Para colocar icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body>
    <!-- NAVBAR -------------------------------------------------------------------------------------------------------->
    <nav class="navbar p-2 fixed-top" data-bs-theme="dark" style="background-color: #28385d;">
        <div class="container-fluid">
            <!-- Título e icone --------------------------------->
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-lightning me-2" style="display: inline-block; transform: scaleX(-1);"></i>Thor Gym<i
                    class="bi bi-lightning ms-1"></i></a>

            <!-- Links que ficam do lado de fora ------------------------------------->
            <div class="d-flex align-items-center gap-3 ms-auto">

                <ul class="navbar-nav flex-row gap-3 me-2">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="#inicio">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="#categoria">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="#planos">Planos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="#duvidas">Dúvidas</a>
                    </li>




                </ul>

                <!-- Botão lateral direito ---------------------------------------->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <!-- Barra Lateral----------------------------------------------------->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">

                <!-- Local de alterar a cor do menu ------------------------------->
                <div class="offcanvas-header" style="background-color: #28385d;">
                    <h3 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel"><i
                            class="bi bi-list fs-2 me-2"></i>Menu</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <!-- Local de alterar a cor abaixo do menu ------------------------->
                <div class="offcanvas-body" style="background-color: #4463ab;">
                    <!-- links internos dentro da barra  ----------------------------------------------->
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 d-flex align-items-center">

                        <br>

                        <!-- BOTÃO DE LOGIN ------------------------------------------------------------>
                        <a href="login.php"
                            class="fw-bold fs-5 btn btn-outline-light w-50 d-flex align-items-center justify-content-center position-relative">
                            <!-- Ícone fixado na esquerda -->
                            <span class="position-absolute start-0 ms-3">
                                <i class="bi bi-box-arrow-in-right fs-3"></i>
                            </span>Login
                        </a>

                        <!-- LINK 01 ------------------------------------------------------------------->
                        <!-- <li class="nav-item">
                            <a class="nav-link active fs-5" aria-current="page" href="index.php"><i class="bi bi-book fs-4 me-2"></i>Link
                                A</a>
                        </li> -->

                        <br><br>

                        <!-- LINK 02 ------------------------------------------------------------------->
                        <!-- <li class="nav-item">
                            <a class="nav-link active fs-5" aria-current="page" href="index.php"><i
                                    class="bi bi-info-square fs-4 me-2"></i>Link B</a>
                        </li> -->

                        <!-- LINK VOLTAR ------------------------------------------------------------------->
                        <!-- <li class="nav-item">
                            <a class="nav-link active fs-5 fw-bold" aria-current="page" href="index.php">Voltar</a>
                        </li> -->

                        <!-- BOTÃO VOLTAR -->
                        <a href="index.php"
                            class="fw-bold fs-5 btn btn-outline-light w-50 d-flex align-items-center justify-content-center position-relative">
                            <!-- Ícone fixado na esquerda -->
                            <span class="position-absolute start-0 ms-3">
                                <i class="bi bi-backspace fs-3"></i>
                            </span>Voltar
                        </a>






                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- HEADER LOGO GRANDE -------------------------------------------------------------------------------------------------------->
    <br><br><!-- br de espaço para separar o fixed top do header corretamente -->
    <header class="bg-black position-relative overflow-hidden py-4" id="inicio">

        <!-- Imagem de fundo do header -->
        <img src="img/thorFundo1.jpg" class="position-absolute top-0 start-0 w-100 h-100 opacity-25"
            style="object-fit: cover; z-index: 1;" alt="Fundo da academia">

        <!-- Conteúdo centralizado -->
        <section class="container text-primary py-4 position-relative" style="z-index: 2;">

            <div class="text-center">

                <!-- LOGOTIPO MARTELO DE ALTERE -->
                <img src="img/marteloAltere3.png" width="350" height="350" class="rounded-3 img-fluid mb-3"
                    alt="Martelo e halteres">

                <h1 class="display-5 fw-bold mb-3 text-white">
                    Seu Portal Thor Gym
                </h1>

                <h5 class="text-primary">
                    Conheça nossos planos, dados cadastrais <br> e o canal de atendimento interno em uma única
                    plataforma!
                </h5>

            </div>

        </section>

    </header>

    <!-- ALERTA AVISO in -------------------------------------------------------------------------------->
    <section class="container mt-4 ">
        <div class="alert alert-danger text-center p-1" role="alert">
            <strong><i class="bi bi-gift fs-4 "></i><i class="bi bi-tree fs-4 me-2 "></i>Promoção Especial de
                Natal!</strong><i class="bi bi-tree fs-4 ms-2"></i><i class="bi bi-gift me-3 fs-4 "></i>
            <br>Plano Anual com preço exclusivo.
            <h6 class="text-muted mt-1" style="font-size: 0.7rem; letter-spacing: 0.5px;">Válido apenas para as
                primeiras 50 matrículas realizadas até 24 de dezembro.</h6>
        </div>
    </section>

    <!-- MAIN ----------------------------------------------------------------------------------------------------------->
    <main>
        <!-- CARD CATEGORIAS in ----------------------------------------------------------------------->
        <section class="container text-center mt-4 " id="categoria">
            <!-- Titulo -->
            <div>
                <h2 class="text-primary-emphasis fw-bold">Eleita a melhor do mercado!</h2>
                <h6 class="text-primary pb-4">Inscreva-se agora!</h6>
            </div>
            <br>
            <div class="row g-4 mb-5">
                <!-- CARD01 --->
                <div class="col-12 col-md-4">

                    <!----------------------->
                    <div class="card pb-2 mx-auto" style="width: 18rem;">
                        <div class="card-body">
                            <i class="bi bi-bicycle fs-1 text-primary"></i>
                            <a class="card-title nav-link active fw-bold fs-5 text-primary-emphasis">Infraestrutura
                                Premium</a>
                            <p class="card-text text-primary">Treine com equipamentos modernos e uma estrutura completa,
                                projetada para oferecer mais conforto, segurança e eficiência em cada exercício.</p>

                            <p> </p>

                        </div>
                    </div>
                    <!----------------------->

                </div>
                <!-- CARD02 --->
                <div class="col-12 col-md-4">
                    <div class="card pb-2 mx-auto" style="width: 18rem;">
                        <div class="card-body">
                            <i class="bi bi-person-raised-hand fs-1 text-primary"></i>
                            <a class="card-title nav-link active fw-bold fs-5 text-primary-emphasis">Instrutores
                                Qualificados</a>
                            <p class="card-text text-primary">Conte com profissionais qualificados para orientar seus
                                exercícios, corrigir movimentos e ajudar você a evoluir de acordo com seus objetivos e
                                seu ritmo..</p>
                            <p> </p>

                        </div>
                    </div>
                    <!----------------------->
                </div>
                <!-- CARD03 --->
                <div class="col-12 col-md-4">

                    <div class="card mx-auto" style="width: 18rem;">
                        <div class="card-body">
                            <i class="bi bi-piggy-bank fs-1 text-primary"></i>
                            <a class="card-title nav-link active fw-bold fs-5 text-primary-emphasis">Planos
                                Flexíveis</a>
                            <p class="card-text pb-4 text-primary">Escolha o plano que melhor combina com sua rotina e
                                seu orçamento. Encontre opções de contratação que facilitem manter a regularidade dos
                                seus treinos.
                            </p>
                        </div>
                    </div>
                    <!----------------------->
                </div>
            </div>
        </section>
        <!-- ------------------------------------------------------------------------------------------>

        <!-- CARD PRODUTOS ---------------------------------------------------------------------------->
        <section class="container-fluid text-center p-1" style="background-color: #edf1f9;" id="planos">
            <div class="container">
                <!-- Título -->
                <div class="mt-4" id="produtos">
                    <h2 class="text-primary-emphasis fw-bold">Planos em Destaque</h2>
                    <h6 class="text-primary pb-4">Conheça alguns dos planos mais selecionados pela Thor Gym.</h6>
                </div>

                <br>
                <div class="row pb-5 g-3">

                    <!-- CARDS dos 3 PRODUTOS -->
                    <div class="col col-mg">
                        <!-- produto 01 ----------------------------->
                        <div class="card mx-auto shadow" style="width: 18rem;">
                            <img src="img/produto01.png" class="card-img-top" style="height: 220px; object-fit: cover;">
                            <div class="card-body">
                                <div class="text-start">
                                    <span class="badge text-bg-danger">Oferta</span>
                                </div>
                                <h5 class="card-title pt-3 text-primary-emphasis fw-bold">Plano Básico</h5>
                                <h6 class="card-text text-primary">Para quem quer começar a treinar.</h6>

                                <br>
                                <ul class="text-start text-primary">
                                    <li>Acesso à musculação.</li>
                                    <br>
                                    <li>Equipamentos para treino.</li>
                                    <br>
                                    <li>Treino inicial para adaptação.</li>
                                    <br>
                                    <li>Ideal para iniciantes.</li>
                                </ul>
                                <br>
                                <!-- Preço Antigo -->
                                <p class="text-secondary text-decoration-line-through mb-0">R$ 150,90</p>

                                <!-- Preço atual -->
                                <h4 class="text-primary">R$ 99,90</h4>

                                <div>
                                    <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#detalhesProduto">
                                        <i class="bi bi-eye me-1"></i>
                                        Ver detalhes
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--  --------------------------------------->
                    </div>

                    <div class="col col-mg ">
                        <!-- produto 02 ----------------------------->
                        <div class="card mx-auto shadow pb-1" style="width: 18rem;">
                            <img src="img/produto02.jpg" class="card-img-top" style="height: 220px; object-fit: cover;">
                            <div class="card-body">
                                <div class="text-start">
                                    <span class="badge text-bg-success">Mais popular</span>
                                </div>
                                <h5 class="card-title pt-3 text-primary-emphasis fw-bold">Plano Completo</h5>
                                <h6 class="card-text text-primary">Para quem busca evolução constante</h6>

                                <ul class="text-start text-primary">
                                    <li>Acesso à musculação.</li>
                                    <br>
                                    <li>Avaliação física periódica.</li>
                                    <br>
                                    <li>Ficha de treino personalizada.</li>
                                    <br>
                                    <li>Acompanhamento e orientação dos instrutores.</li>
                                </ul>

                                <!-- Preço Antigo -->
                                <p class="text-secondary text-decoration-line-through mb-0">R$ 299,90</p>

                                <!-- Preço atual -->
                                <h4 class="text-primary">R$ 199,90</h4>

                                <div>
                                    <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#detalhesProduto">
                                        <i class="bi bi-eye me-1"></i>
                                        Ver detalhes
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--  --------------------------------------->
                    </div>

                    <div class="col col-mg">
                        <!-- produto 03 ----------------------------->
                        <div class="card mx-auto shadow" style="width: 18rem;">
                            <img src="img/produto03.jpg" class="card-img-top" style="height: 220px; object-fit: cover;">
                            <div class="card-body">
                                <div class="text-start">
                                    <span class="badge text-bg-warning">Premium</span>
                                </div>
                                <h5 class="card-title pt-3 text-primary-emphasis fw-bold">Plano VIP</h5>
                                <h6 class="card-text text-primary">Para quem deseja mais benefícios.</h6>

                                <ul class="text-start text-primary">
                                    <li>Todos os benefícios do Plano Completo.</li>
                                    <br>
                                    <li>Acompanhamento individual.</li>
                                    <br>
                                    <li>Reavaliações físicas frequentes.</li>
                                    <br>
                                    <li>Benefícios exclusivos para alunos VIP.</li>
                                </ul>

                                <!-- Preço Antigo -->
                                <p class="text-secondary text-decoration-line-through mb-0">R$ 399,90</p>

                                <!-- Preço atual -->
                                <h4 class="text-primary">R$ 299,90</h4>

                                <div>
                                    <button type="button" class="btn btn-outline-primary w-100" data-bs-toggle="modal"
                                        data-bs-target="#detalhesProduto">
                                        <i class="bi bi-eye me-1"></i>
                                        Ver detalhes
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--  --------------------------------------->
                    </div>
                </div>

            </div>

        </section>

        <!-- ACCORDION PERGUNTAS----------------------------------------------------------------------->
        <section class="container mb-5" id="duvidas">
            <!--  -------------------------->
            <!-- TITULO -->
            <div class="container text-center mt-5">
                <!-- Titulo -->
                <div class="mt-5" id="produtos">
                    <h2 class="text-primary-emphasis fw-bold">Perguntas frequentes</h2>
                    <h6 class="text-primary pb-4">Conheça alguns dos produtos selecionados pela Verde Viva.</h6>
                </div>
            </div>

            <br>

            <!-- Accordion Itens ------------------------->
            <div class="accordion card mx-auto shadow accordion-flush" id="accordionFlushExample">

                <!-- collapse 1 ------------------------->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Quais os horários de funcionamento ?
                        </button>
                    </h2>
                    <!-- Resposta 1 -->
                    <div id="flush-collapseOne" class="accordion-collapse collapse text-center"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Segunda a sexta, das 06h às 22h. Sábados, das 08h às 13h.
                        </div>
                    </div>
                </div>

                <!-- collapse 2 ------------------------->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Onde vocês estão localizados e há estacionamento?
                        </button>
                    </h2>
                    <!-- Resposta 2 -->
                    <div id="flush-collapseTwo" class="accordion-collapse collapse text-center"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Sim, temos estacionamento próprio e gratuito para alunos em treino.
                        </div>
                    </div>
                </div>

                <!-- collapse 3 ------------------------->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Quais são as formas de pagamento ?
                        </button>
                    </h2>
                    <!-- Resposta 3 -->
                    <div id="flush-collapseThree" class="accordion-collapse collapse text-center"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Cartão de crédito, débito, Pix, Wellhub e TotalPass.</div>
                    </div>
                </div>

                <!-- collapse 4 ------------------------->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                            aria-controls="flush-collapseFour">
                            A academia oferece aula experimental?
                        </button>
                    </h2>
                    <!-- Resposta 4 -->
                    <div id="flush-collapseFour" class="accordion-collapse collapse text-center"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Sim. Oferecemos uma aula experimental gratuita. Basta apresentar um
                            documento com foto na recepção.</div>
                    </div>
                </div>

                <!-- collapse 5 ------------------------->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                            aria-controls="flush-collapseFive">
                            Existe taxa de matrícula?
                        </button>
                    </h2>
                    <!-- Resposta 5 -->
                    <div id="flush-collapseFive" class="accordion-collapse collapse text-center"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">A taxa é isenta no plano anual. Para os demais planos, consulte
                            nossos atendentes.</div>
                    </div>
                </div>


            </div>

            <!--  -------------------------->
        </section>
    </main>

    <!-- dark-preFOOTER -->
    <section class="text-white bg-black">
        <div class="row">

            <!-- 01 IMAGEM ANIMADA THOR -------------------------------------------------------------------------------------------------->
            <div class="col col-md">
                <img src="img/thor_balao_raios_animado.gif" class="img-fluid" style="max-height: 350px; width: 350px;"
                    alt="thor_joinha">
            </div>

            <!-- 02 Carousel ENTRADA ---------------------------------------------------------------->
            <div class="col col-md d-flex justify-content-center align-self-center">

                <section class="p-0 w-100">

                    <!-- Tag principal do Carrossel (controlar a distancia das setas: w-100 mx-auto" style="max-width: 1400px) -->
                    <div id="carouselExample" class="carousel slide w-100 mx-auto" style="width: 700px;">

                        <!-- ZOOM PARA AUMENTAR O TAMANHO DE TUDO -->
                        <div class="carousel-inner card bg-black text-white" style="height: 250px; zoom: 1.3;">

                            <!-- Primeiro slide ------------------------------------------------------------------------>
                            <div class="carousel-item active">
                                <div class="text-center py-5">
                                    <i class="bi bi-lightning me-2 fs-1"
                                        style="display: inline-block; transform: scaleX(-1);"></i>
                                    <i class="bi bi-battery-charging fs-1"></i>
                                    <i class="bi bi-lightning ms-1 fs-1"></i>

                                    <h5 class="fw-bold mb-1">Com</h5>
                                    <h5 class="fw-bold mb-1">Mais disposição</h5>

                                    <p class="text-secondary small">Energia para o dia a dia.</p>
                                </div>
                            </div>


                            <!-- Segundo slide ------------------------------------------------------------------------>
                            <div class="carousel-item">
                                <div class="text-center py-5">

                                    <i class="bi bi-lightning me-2 fs-1"
                                        style="display: inline-block; transform: scaleX(-1);"></i>
                                    <i class="bi bi-bullseye fs-1"></i>
                                    <i class="bi bi-lightning ms-1 fs-1"></i>

                                    <h5 class="fw-bold mb-1">Com</h5>
                                    <h5 class="fw-bold mb-1">Novos objetivos</h5>

                                    <p class="text-secondary small">Superando limites pessoais.</p>
                                </div>
                            </div>

                            <!-- Terceiro slide ------------------------------------------------------------------------>
                            <div class="carousel-item">
                                <div class="text-center py-5">

                                    <i class="bi bi-lightning me-2 fs-1"
                                        style="display: inline-block; transform: scaleX(-1);"></i>
                                    <i class="bi bi-heart-pulse fs-1"></i>
                                    <i class="bi bi-lightning ms-1 fs-1"></i>

                                    <h5 class="fw-bold mb-1">Com</h5>
                                    <h5 class="fw-bold mb-1">Mais força</h5>

                                    <p class="text-secondary small">Evolução com consistência.</p>
                                </div>
                            </div>

                        </div>

                        <!-- Botões das setas ------------------------------------------------------------------------>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <!-- Retirei (carousel-control-prev-icon) para por <i> -->
                            <span class="" aria-hidden="true"><i class="bi bi-caret-left-square fs-1"></i></span>
                            <span class="visually-hidden">Previous</span>
                        </button>


                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <!-- Retirei (carousel-control-prev-icon) para por <i> -->
                            <span class="" aria-hidden="true"><i class="bi bi-caret-right-square fs-1"></i></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>

                </section>

            </div>
            <!-- Carousel SAIDA --------------------------------------------------------------------->


            <!-- 03 LOGO ALTERE COM TEXTO -------------------------------------------------------------------------------------------->
            <div class="col col-md text-center text-primary">
                <img src="img/marteloAltere2.jpg" width="200" height="250" class="rounded-3 d-block mx-auto mb-2"
                    alt="martelo_alteres">
                <p class="m-0">Segunda a sexta, das 06h às 21h. <br> Sábados, das 06h às 13h.</p>
            </div>
        </div>
    </section>

    <!-- FOOTER --------------------------------------------------------------------------------------------------------->
    <footer class="text-white p-3 pt-4" data-bs-theme="dark" style="background-color: #1b253e;">
        <section class=" container">
            <div class="row">
                <div class="col col-md">
                    <h5 class="fw-bold"><i class="bi bi-lightning me-2"
                            style="display: inline-block; transform: scaleX(-1);"></i>Thor
                        Gym<i class="bi bi-lightning ms-1"></i></h5>
                </div>
                <div class="col col-md text-md-end">
                    <p>© 2026 - Thor Gym - Todos os direitos reservados.</p>
                </div>
            </div>
        </section>

    </footer>
    <!-- Para conectar ao bootstrap -->
    <!-- Incluir Bootstrap JS --------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>