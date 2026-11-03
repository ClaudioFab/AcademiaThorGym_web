<?php
// Inicia a sessão do usuário.
session_start();

// Permite o logout somente por requisições POST.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit;
}

// Limpa todas as variáveis da sessão.
$_SESSION = [];

// Verifica se a sessão utiliza cookies.
if (ini_get('session.use_cookies')) {
    // Obtém as configurações do cookie da sessão.
    $p = session_get_cookie_params();

    // Remove o cookie da sessão do navegador.
    setcookie(session_name(), '', time() - 42000, $p['path'], $p['domain'], $p['secure'], $p['httponly']);
}

// Destrói a sessão no servidor.
session_destroy();


// Redireciona o usuário para a página de login sem mensagem.
//header('Location: index.php');

// Exibe mensagem de sucesso e redireciona para a página inicial.
echo "<script>
    alert('Usuário desconectado com sucesso!');
    window.location='index.php';
</script>";

// Encerra a execução do código.
exit;
?>