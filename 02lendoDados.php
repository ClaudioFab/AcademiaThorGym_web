<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThorGym - Informações Gerais</title>

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
        <section class=" mb-4" id="informacoesGerais">
            <h2 class="text-primary-emphasis fw-bold text-center">Informações Gerais</h2>
            <p class="text-primary text-center">Alunos cadastrados no sistema.</p>

            <!-- Formulário em card central--------------------------------------->
            <div class="card">
                <div class="row justify-content-center mb-5 card-body">

                    <?php

                    require("conexao.php");

                    $consulta = "SELECT * FROM sistemaacademico.matricula";

                    $matricula = mysqli_query($conexao, $consulta);

                    while ($array = mysqli_fetch_array($matricula)) {
                        echo
                        $array['idMatricula'] . " - " .
                            "Aluno: " . $array['nome'] . " - " .
                            "Curso: " . $array['curso'] . "<br>";
                    }

                    ?>

                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>