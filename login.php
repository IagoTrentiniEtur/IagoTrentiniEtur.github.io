<?php
// Inicie ou retome a sessão
session_start();

// Verifique se o usuário já está logado, redirecione para a página de informações se estiver
if (isset($_SESSION['login'])) {
    header("Location: informacoes_sessao.php");
    exit();
}

// Verifique se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    
    // Valide as credenciais do usuário (substitua com a lógica apropriada)
    if ($login === "usuario" && $senha === "senha123") {
        // Defina as informações da sessão
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['inicio_sessao'] = time(); // Data/hora do início da sessão
        $_SESSION['ultima_requisicao'] = time(); // Data/hora da última requisição
    } else {
        $erro = "Credenciais inválidas";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($erro)) { echo "<p>$erro</p>"; } ?>
    <form method="post" action="login.php">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>
