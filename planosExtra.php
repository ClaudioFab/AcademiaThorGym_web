<?php

//Inicia a sessão php
session_start();

// Conecta ao banco de dados
require("conexao.php");

// Busca todos os planos cadastrados no banco em ordem decrescente (os últimos cadastrados primeiro)
$sql_planos = "SELECT * FROM planos ORDER BY idplanos DESC";
$resultado_planos = mysqli_query($conexao, $sql_planos);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThorGym</title>
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
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="bi bi-lightning me-2" style="display: inline-block; transform: scaleX(-1);"></i>Thor Gym<i
                    class="bi bi-lightning ms-1"></i></a>

            <!-- Links que ficam do lado de fora ------------------------------------->
            <div class="d-flex align-items-center gap-3 ms-auto">

                <ul class="navbar-nav flex-row gap-3 me-2">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="#inicio">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5 " aria-current="page" href="index.php">Voltar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="#planos">Planos</a>
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
                                <i class="bi bi-arrow-return-left fs-3"></i>
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
                <img src="img/marteloAltere3.png" width="300" height="300" class="rounded-3 img-fluid mb-3"
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




    <!-- MAIN ----------------------------------------------------------------------------------------------------------->
    <main style="background-color: #edf1f9;">

        <!-- CARD PLANOS EM DESTAQUE ---------------------------------------------------------------------------->
        <section class="container-fluid text-center p-1" id="planos">

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

            <div class="container">
                <!-- Título base ----------------------------------------------------------------->
                <div class="mt-4" id="produtos">
                    <h2 class="text-primary-emphasis fw-bold">Planos em Destaque</h2>
                    <h6 class="text-primary pb-4">Conheça alguns dos planos mais selecionados pela Thor Gym.</h6>
                </div>

                <br>

                <!-- CARDS dos 3 PLANOS PRINCIPAIS -------------------------------------------->
                <div class="row pb-5 g-3">
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

                            </div>
                        </div>
                        <!--  --------------------------------------->
                    </div>
                </div>


                <!-- TITULO DE ALERT THORGYM PLUS ---------------------------------------------->
                <section class="container mt-4 pb-5">
                    <div class="alert alert-primary text-center p-3" role="alert">

                        <h4 class="fw-bold"><i class="bi bi-lightning me-2" style="display: inline-block; transform: scaleX(-1);"></i>Conheça nossos planos ThorGym plus!<i class="bi bi-lightning ms-1"></i></h4>
                        Pacotes ThorGym Plus com novas ofertas todo mês!
                    </div>
                </section>




                <!-- PLANOS CADASTRADOS NO BANCO DE DADOS ------------------------------------>
                <div class="row pb-5 gx-4 gy-5">

                    <!-- if com While para ficar buscando todos os registrados --------------->
                    <?php if ($resultado_planos && mysqli_num_rows($resultado_planos) > 0): ?>

                        <?php while ($plano = mysqli_fetch_assoc($resultado_planos)): ?>

                            <div class="col col-mg">
                                <div class="card mx-auto shadow h-100" style="width: 18rem;">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div>
                                            <div class="text-start">
                                                <span class="badge text-bg-primary">ThorGym Plus</span>
                                            </div>
                                            <!-- Nome do Plano-------------->
                                            <h5 class="card-title pt-3 text-primary-emphasis fw-bold">
                                                <?php echo htmlspecialchars($plano['nomePlano']); ?>
                                            </h5>
                                            <!-- Descrição ---------------->
                                            <p class="card-text text-primary">
                                                <?php echo htmlspecialchars($plano['descricao']); ?>
                                            </p>
                                        </div>
                                        <div>
                                            <!-- Preço --------------------->
                                            <h4 class="text-primary mt-3">
                                                R$ <?php echo number_format($plano['valor'], 2, ',', '.'); ?>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        <?php endwhile; ?>


                    <?php else: ?>
                        <div class="col-12">
                            <p class="text-muted">Nenhum plano adicional cadastrado no momento.</p>
                        </div>

                    <?php endif; ?>


                </div>










                <!-- FINAL THOR PLUS --------------------------------------------------------->



            </div>

        </section>

    </main>


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