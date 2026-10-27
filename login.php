<?php

//Inicia a sessão php
session_start();

//Verifica se o usuário ja está logado
if (isset($_SESSION["usuario_id"])) {
    header("Location: indexLogado.php");
    exit;
}

//Verifica se houver erro na tentativa de login
$erro = isset($_GET["erro"]);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thor Gym - Login</title>
    <!-- Para conectar ao bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Para colocar icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

</head>

<body>
    
    <br><br>
    <main class="container d-flex justify-content-center align-items-center">
        <div class="card shadow-sm w-100" style="max-width: 420px;">
            <div class="card-body p-4">
                <h2 class="text-primary-emphasis fw-bold mb-3">
                    Acesso Administrativo
                </h2>

                <!-- Mostra erro se o login estiver incorreto -->
                <?php if ($erro): ?>

                    <div class="alert alert-danger">
                        E-mail ou senha inválidos.
                    </div>
                <?php endif; ?>

                <div class="row ">
                    <div class="col">
                        <form action="autenticar.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label text-primary">Email</label>
                                <input type="text" name="email" class="form-control" aria-describedby="emailHelp" placeholder="Digite seu Email">
                                <div id="emailHelp" class="form-text">Nunca compartilharemos seu e-mail.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-primary">Senha</label>
                                <input type="password" class="form-control" name="senha" placeholder="Digite sua Senha">
                            </div>

                            <!-- Botão Entrar -->
                            <button type="submit" class="btn btn-primary w-100">
                                Conectar
                            </button>
                        </form>
                        <!-- Voltar ao site -->
                        <button class="btn btn-outline-primary d-block mt-3" onclick="window.location.href='index.php'">Voltar</button>
                    </div>
                </div>
            </div>


    </main>

    <!-- Para conectar ao bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>