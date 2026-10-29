<?php

//Original base de referencia
//$nome = $_POST["aluno"];
//$curso = $_POST["curso"];

//Impedimento para caso não esteja logado -------->
session_start(); // Inicia a sessão do usuário

//Impede que o navegador reutilize uma página armazenada em cache
header('Cache-Control: no-store, no-cache, must-revalidate');

//Verifica se existe uma sessão de usuário logado
if (!isset($_SESSION['usuario_id'])) {
    header('Location: index.php'); // Redireciona para a página inicial
    exit; // Interrompe a execução do PHP
}
//------------------------------------------------>

// Verifica se o formulário foi enviado pelo método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe o nome e a descrição do plano enviados pelo formulário
    $nomeP = $_POST["nomePlano"];
    $descricao = $_POST["descricao"];

    // Converte o valor digitado em centavos para reais
    // Exemplo: 7990 passa a ser 79.90
    $valor = $_POST["valor"] / 100;

    // Garante que o valor tenha duas casas decimais
    // Exemplo: 79.9 passa a ser 79.90
    $valor = number_format($valor, 2, '.', '');

    // Conecta ao banco de dados
    require("conexao.php");

    $inserir = "INSERT INTO planos (nomePlano,descricao,valor) VALUES ('$nomeP','$descricao','$valor')";

    if (mysqli_query($conexao, $inserir)) {
        echo "
        <script>
        alert('Inserção de plano realizado com sucesso!');
        
        /*Para retornar a pagina*/
        window.location.href = 'indexLogado.php';
        </script>";
        exit();
    } else {
        echo "
        <script>
        alert('Erro ao cadastrar novo plano:" . mysqli_error($conexao) . "');
        window.history.back();
        </script>";
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThorGym - Cadastro</title>
    <!-- Para conectar ao bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Para colocar icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body style="background-color: #edf1f9;">
    <!-- NAVBAR -------------------------------------------------------------------------------------------------------->
    <nav class="navbar p-2 fixed-top" data-bs-theme="dark" style="background-color: #28385d;">
        <div class="container-fluid">
            <!-- Título e icone --------------------------------->
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-lightning me-2" style="display: inline-block; transform: scaleX(-1);"></i>Thor Gym<i
                    class="bi bi-lightning ms-1"></i></a>

            <!-- Links que ficam do lado de fora ------------------------------------->
            <div class="d-flex align-items-center gap-3 ms-auto">

                <ul class="navbar-nav flex-row gap-3 me-2 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="#inicio">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active fs-5 " aria-current="page" href="indexLogado.php">Voltar</a>
                    </li>

                    <li class="nav-item">
                        <form action="logout.php" method="POST" class="d-inline">
                            <button type="submit" class="nav-link active fs-5 fw-bold btn btn-link p-0 border-0 text-decoration-none">Desconectar</button>
                        </form>
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

                        <form action="logout.php" method="POST">
                            <button type="submit" class="fw-bold fs-5 btn btn-outline-light w-100">
                                <i class="bi bi-backspace fs-5 me-2"></i>Desconectar
                            </button>
                        </form>

                        <br><br>

                        <!-- BOTÃO VOLTAR -->
                        <a href="indexLogado.php"
                            class="fw-bold fs-5 btn btn-outline-light w-50 d-flex align-items-center justify-content-center position-relative">
                            <!-- Ícone fixado na esquerda -->
                            <span class="position-absolute start-0 ms-3">
                                <i class="bi bi-arrow-return-left fs-5 me-2"></i>
                            </span>Voltar
                        </a>

                        <br><br>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- HEADER LOGO GRANDE -------------------------------------------------------------------------------------------------------->
    <br><br><!-- br de espaço para separar o fixed top do header corretamente -->
    <header class="bg-black position-relative overflow-hidden py-4" id="inicio">

        <!-- Imagem de fundo do header -->
        <img src="img/engrenagem.png" class="position-absolute top-0 start-0 w-100 h-100 opacity-25"
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
                    Área do administrador
                </h5>

            </div>

        </section>

    </header>

    <!-- MAIN ------------------------------------------------------>
    <!-- br de espaço para separar o fixed top do header corretamente -->
    <main class="container mt-5">
        <!-- Título e Descrição --------------------------------------------------->
        <section class="text-center mb-4">
            <h2 class="text-primary-emphasis fw-bold">Cadastro de novos Planos</h2>
            <p class="text-primary">Insira os dados abaixo para registrar um novo para a academia.</p>

            <br>
            <!-- Formulário em card central--------------------------------------->
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-6 col-lg-5">

                    <div class="card shadow-sm w-100">
                        <div class="card-body p-4">

                            <!-- Formulario principal --------------------------------->
                            <form method="post" action="">

                                <!-- Plano -->
                                <div class="mb-3 text-start">
                                    <label for="aluno" class="form-label fw-bold text-primary-emphasis">Plano/Modalidade</label>
                                    <input type="text" class="text-primary form-control border-primary-subtle" id="nomePlano" name="nomePlano" placeholder="Nome do plano">
                                </div>

                                <!-- Descrição -------------------------------------------->
                                <div class="mb-4 text-start">
                                    <label for="curso" class="form-label fw-bold text-primary-emphasis">Descrição do plano</label>
                                    <input type="text" class="text-primary form-control border-primary-subtle" id="descricao" name="descricao" placeholder="Descrever plano">
                                </div>

                                <!-- Valor -->
                                <div class="mb-4 text-start">
                                    <label for="valor" class="form-label fw-bold text-primary-emphasis mb-0">Valor do plano</label>
                                    <small class="form-text d-block mb-2">
                                        Digite apenas números. Ex.: 1000 = R$ 10,00.
                                    </small>

                                    <input type="number" step="1" min="0" class="text-primary form-control border-primary-subtle"
                                        id="valor"
                                        name="valor"
                                        placeholder="Digite o valor do plano"
                                        required>
                                </div>

                                <!-- Botões -------------------------------------------->
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary fw-bold">
                                        <i class="bi bi-person-add me-2"></i>Cadastrar
                                    </button>

                                    <button type="reset" class="btn btn-outline-primary fw-bold">
                                        <i class="bi bi-x-circle me-2"></i>Limpar
                                    </button>
                                </div>
                            </form>

                            <!-- Voltar ao site -->
                            <button class="btn btn-outline-primary d-block mt-3" onclick="window.location.href='indexLogado.php'">
                                <i class="bi bi-arrow-return-left me-2"></i>Voltar</button>
                            <!-- Formulario principal fechamento --------------------------------->
                        </div>
                    </div>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>