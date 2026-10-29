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

<body>

    <!-- MAIN ----------------------------------------------------------------------------------------------------------->
    <main class="container mt-5">
        <!-- Título e Descrição --------------------------------------------------->
        <section class=" mb-4" id="atualizarDados">
            <h2 class="text-primary-emphasis fw-bold text-center">Atualizar informações de Planos</h2>
            <p class="text-primary text-center">Edite as informações dos planos e modalidades abaixo.</p>

            <!-- Formulário em card central--------------------------------------->
            <div class="card">

                <div class="row justify-content-center mb-5 card-body">

                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Plano</th>
                                <th>Descrição</th>
                                <th>Valor</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php while ($plano = mysqli_fetch_assoc($modalidades)): ?>
                                <tr>
                                    <td><?= $plano['idplanos'] ?></td>
                                    <td><?= $plano['nomePlano'] ?></td>
                                    <td><?= $plano['descricao'] ?></td>
                                    <td><?= $plano['valor'] ?></td>
                                    <td>
                                        <a href="?editar=<?= $plano['idplanos'] ?>">Editar</a>
                                    </td>
                                    <td>
                                        <a href="?apagar=<?= $plano['idplanos'] ?>">Apagar</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>

                    <?php

                    if ($editaPlano): ?>
                        <h3>Editar Plano</h3>

                        <form method="POST">

                            <!-- ID Planos -->
                            <label>ID:</label><br>
                            <input type="text" name="idplanos" value="<?= $editaPlano['idplanos'] ?>">
                            <br><br>
                            <label>Plano: </label><br>
                            <input type="text" name="plano" value="<?= $editaPlano['nomePlano'] ?>">
                            <br><br>
                            <label>Descricao do plano: </label><br>
                            <input type="text" name="curso" value="<?= $editaPlano['descricao'] ?>">
                            <br><br>
                            <label>Valor: </label><br>
                            <input type="text" name="curso" value="<?= $editaPlano['valor'] ?>">
                            <br><br>
                            <button type="submit" name="atualizar">Atualizar</button>
                            <br><br>
                            <button type="button" onclick="window.location.href='02atualizarDados.php'">Cancelar</button>

                        </form>
                    <?php endif; ?>

                </div>

            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>