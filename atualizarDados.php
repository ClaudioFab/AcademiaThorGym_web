<?php

require("conexao.php");

if (isset($_POST['atualizar'])) {

    $idplanos  = $_POST['idplanos'];
    $nomeP     = $_POST['nomePlano'];
    $descricao = $_POST['descricao'];
    $valor = (float) $_POST['valor'] / 100;

    $atualizar = mysqli_prepare(
        $conexao,
        "UPDATE planos SET nomePlano = ?, descricao = ?, valor = ? 
         WHERE idplanos = ?"
    );

    mysqli_stmt_bind_param(
        $atualizar,
        "ssdi",
        $nomeP,
        $descricao,
        $valor,
        $idplanos
    );

    if (mysqli_stmt_execute($atualizar)) {

        echo "<script>
            alert('Dados atualizados com sucesso!');
            window.location='atualizarDados.php';
        </script>";
        exit();
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conexao);
    }
}

$editaPlano = null;

if (isset($_GET['editar'])) {

    $idEditar = $_GET['editar'];

    $resultado = mysqli_query($conexao, "SELECT * FROM planos WHERE idplanos = $idEditar");

    $editaPlano = mysqli_fetch_assoc($resultado);
}

$modalidades = mysqli_query($conexao, "SELECT * FROM planos");

if (isset($_GET['apagar'])) {
    $idplanos = $_GET['apagar'];

    $deletar = "DELETE FROM planos WHERE idplanos = $idplanos";

    if (mysqli_query($conexao, $deletar)) {
        echo "<script>
            alert('Dados excluidos com sucesso!');
            window.location='atualizarDados.php';
        </script>";
        exit();
    } else {
        echo "Erro ao deletar!" . mysqli_error($conexao);
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThorGym - Atualizar Dados</title>

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
    <main class="container mt-5">

        <!-- Título e descrição -->
        <section class="mb-4" id="atualizarDados">
            <h2 class="text-primary-emphasis fw-bold text-center">
                Gerenciar Planos
            </h2>

            <p class="text-primary text-center">
                Consulte, edite ou remova os planos cadastrados.
            </p>

            <!-- EDIÇÃO e EXCLUSÃO ------------------------------------->
            <div class="w-100">
                <div class=" p-4">

                    <div class=" table-responsive rounded-3">
                        <table class="table table-hover table-bordered align-middle">
                            <thead class="table">
                                <tr>
                                    <th class="bg-primary text-white">ID</th>
                                    <th class="bg-primary text-white">Plano</th>
                                    <th class="bg-primary text-white">Descrição</th>
                                    <th class="bg-primary text-white">Valor</th>
                                    <th class="bg-primary text-white"></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php while ($plano = mysqli_fetch_assoc($modalidades)): ?>
                                    <tr>
                                        <td><?= $plano['idplanos'] ?></td>

                                        <td class="fw-bold">
                                            <?= $plano['nomePlano'] ?>
                                        </td>

                                        <td><?= $plano['descricao'] ?></td>

                                        <td>
                                            R$ <?= number_format($plano['valor'], 2, ',', '.') ?>
                                        </td>

                                        <td class="text-center">
                                            <a href="?editar=<?= $plano['idplanos'] ?>"
                                                class="fw-bold btn btn-primary btn-sm me-1">
                                                <i class="bi bi-pencil me-2"></i>Editar
                                            </a>

                                            <a href="?apagar=<?= $plano['idplanos'] ?>"
                                                class="fw-bold btn btn-dark btn-sm">
                                                <i class="bi bi-trash me-2"></i>Apagar
                                            </a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Atualizar ou cancelar --------------------------->
            <?php if ($editaPlano): ?>

                <div class="row justify-content-center mt-4 mb-5">
                    <div class="col-12 col-md-6 col-lg-5">

                        <div class="card shadow-sm w-100">
                            <div class="card-body p-4">

                                <h4 class="text-primary-emphasis fw-bold text-center mb-4">
                                    Editar Plano
                                </h4>

                                <form method="POST">

                                    <!-- ID -->
                                    <div class="mb-3 text-start">
                                        <label class="form-label fw-bold text-primary-emphasis">
                                            ID
                                        </label>

                                        <input type="text"
                                            name="idplanos"
                                            class="text-primary form-control border-primary-subtle"
                                            value="<?= $editaPlano['idplanos'] ?>"
                                            readonly>
                                    </div>

                                    <!-- Plano -->
                                    <div class="mb-3 text-start">
                                        <label class="form-label fw-bold text-primary-emphasis">
                                            Plano/Modalidade
                                        </label>

                                        <input type="text"
                                            name="nomePlano"
                                            class="text-primary form-control border-primary-subtle"
                                            value="<?= $editaPlano['nomePlano'] ?>"
                                            required>
                                    </div>

                                    <!-- Descrição -->
                                    <div class="mb-4 text-start">
                                        <label class="form-label fw-bold text-primary-emphasis">
                                            Descrição do plano
                                        </label>

                                        <input type="text"
                                            name="descricao"
                                            class="text-primary form-control border-primary-subtle"
                                            value="<?= $editaPlano['descricao'] ?>"
                                            required>
                                    </div>

                                    <!-- Valor (permitindo apenas números de 0 a 9)-->
                                    <div class="mb-4 text-start">
                                        <label class="form-label fw-bold text-primary-emphasis">
                                            Valor do plano
                                        </label>

                                        <small class="form-text d-block mb-2">
                                            Digite apenas números. Ex.: 12345 = R$ 123,45.
                                        </small>

                                        <input type="text"
                                            name="valor"
                                            id="valor"
                                            class="text-primary form-control border-primary-subtle"
                                            value="<?= (int) round($editaPlano['valor'] * 100) ?>"
                                            inputmode="numeric"
                                            pattern="[0-9]+"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                            required>
                                    </div>

                                    <!-- Botões -->
                                    <div class="d-grid gap-2">

                                        <button type="submit"
                                            name="atualizar"
                                            class="btn btn-primary fw-bold">
                                            <i class="bi bi-check-circle me-2"></i>
                                            Atualizar
                                        </button>

                                        <button type="button"
                                            class="btn btn-outline-primary fw-bold"
                                            onclick="window.location.href='atualizarDados.php'">
                                            <i class="bi bi-x-circle me-2"></i>
                                            Cancelar
                                        </button>

                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            <?php endif; ?>

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