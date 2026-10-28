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
    <title>ThorGym - Cadastrar Planos</title>

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
        <section class="text-center mb-4">
            <h2 class="text-primary-emphasis fw-bold">Cadastro de novos Planos</h2>
            <p class="text-primary">Insira os dados abaixo para registrar um novo para a academia.</p>

            <!-- Formulário em card central--------------------------------------->
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card">
                        <div class="card-body p-4">

                            <!-- Formulario principal --------------------------------->
                            <form method="post" action="">

                                <!-- Plano -->
                                <div class="mb-3 text-start">
                                    <label for="aluno" class="form-label fw-bold text-primary-emphasis">Plano/Modalidade</label>
                                    <input type="text" class="form-control border-primary-subtle" id="nomePlano" name="nomePlano" placeholder="Nome do plano">
                                </div>

                                <!-- Descrição -------------------------------------------->
                                <div class="mb-4 text-start">
                                    <label for="curso" class="form-label fw-bold text-primary-emphasis">Descrição do plano</label>
                                    <input type="text" class="form-control border-primary-subtle" id="descricao" name="descricao" placeholder="Descrever plano">
                                </div>

                                <!-- Valor -->
                                <div class="mb-4 text-start">
                                    <label for="valor" class="form-label fw-bold text-primary-emphasis mb-0">Valor do plano</label>
                                    <small class="form-text d-block mb-2">
                                        Digite apenas números. Ex.: 1000 = R$ 10,00.
                                    </small>

                                    <input type="number" step="1" min="0" class="form-control border-primary-subtle"
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
                            <!-- Formulario principal fechamento --------------------------------->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>