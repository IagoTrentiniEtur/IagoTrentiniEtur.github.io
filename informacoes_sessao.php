<?php
// Inicie ou retome a sessão
session_start();

// Verifique se o usuário está autenticado
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

// Atualize a data/hora da última requisição
$_SESSION['ultima_requisicao'] = time();

// Calcule o tempo de sessão
$tempo_sessao = time() - $_SESSION['inicio_sessao'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Informações da Sessão</title>
</head>
<body>
    <h1>Informações da Sessão</h1>
    <p>Login: <?php echo $_SESSION['login']; ?></p>
    <p>Data/Hora do Início da Sessão: <?php echo date('Y-m-d H:i:s', $_SESSION['inicio_sessao']); ?></p>
    <p>Data/Hora da Última Requisição: <?php echo date('Y-m-d H:i:s', $_SESSION['ultima_requisicao']); ?></p>
    <p>Tempo de Sessão: <?php echo gmdate("H:i:s", $tempo_sessao); ?></p>
    <a href="logout.php">Sair</a>
</body>
</html>
