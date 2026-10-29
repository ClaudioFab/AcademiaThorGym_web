<?php

require("conexao.php");

if (isset($_POST['atualizar'])) {
    $idplanos    = $_POST['idplanos'];
    $nomeP       = $_POST['nomePlano'];
    $descricao   = $_POST['descricao'];
    $valor       = $_POST['valor'];

    $atualizar = "UPDATE planos SET 
    nomePlano = '$nomeP', 
    descricao = '$descricao', 
    valor     = '$valor' 
    WHERE idplanos = '$idplanos' ";

    if (mysqli_query($conexao, $atualizar)) {
        echo "<script>
            alert('Dados atualizados com sucesso!');
            window.location='02atualizarDados.php';
        </script>";
        exit();
    } else {
        echo "Erro ao atualizar!" . mysqli_error($conexao);
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
            window.location='02atualizarDados.php';
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

    <!-- MAIN ----------------------------------------------------------------------------------------------------------->

    <br><br>
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

                                    <!-- Valor -->
                                    <div class="mb-4 text-start">
                                        <label class="form-label fw-bold text-primary-emphasis">
                                            Valor do plano
                                        </label>

                                        <small class="form-text d-block mb-2">
                                            Digite apenas números. Ex.: 1000 = R$ 10,00.
                                        </small>

                                        <input type="number"
                                            name="valor"
                                            class="text-primary form-control border-primary-subtle"
                                            value="<?= round($editaPlano['valor'] * 100) ?>"
                                            step="1"
                                            min="0"
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
                                            onclick="window.location.href='02atualizarDados.php'">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>