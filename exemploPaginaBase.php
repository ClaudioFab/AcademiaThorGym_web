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
                        <a class="nav-link active fs-5 fw-bold" aria-current="page" href="index.php">Voltar</a>
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
                        <!-- <a href="login.php"
                            class="fw-bold fs-5 btn btn-outline-light w-50 d-flex align-items-center justify-content-center position-relative">
                            <span class="position-absolute start-0 ms-3">
                                <i class="bi bi-box-arrow-in-right fs-3"></i>
                            </span>Login
                        </a> -->


                        <!-- LINK 01 -------------------------------------------------------------------
                        <li class="nav-item">
                            <a class="nav-link active fs-5" aria-current="page" href="index.php"><i class="bi bi-book fs-4 me-2"></i>Link
                                A</a>
                        </li> -->

                        <br><br>

                        <!-- LINK 02 -------------------------------------------------------------------
                        <li class="nav-item">
                            <a class="nav-link active fs-5" aria-current="page" href="index.php"><i
                                    class="bi bi-info-square fs-4 me-2"></i>Link B</a>
                        </li> -->

                        <!-- LINK VOLTAR -------------------------------------------------------------------
                        <li class="nav-item">
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

    <main>
        <section class="container">
            <br><br><br>

            <div class="card d-flex justify-content-center align-items-center">
                Conteúdo
            </div>

            <br><br><br>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>