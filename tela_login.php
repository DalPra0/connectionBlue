<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-box">
        <button class="close-button" id="closeLogin">X</button>
        <img src="logo.png" alt="Logo" class="logo">
        
        <button class="login-google">Fazer Login com Google</button>
        <button class="login-microsoft">Fazer Login com Microsoft</button>

        <div class="divider">
            <span>OU</span>
        </div>

        <form action="login.php" method="POST" id="loginForm">
            <input type="email" name="email" placeholder="Digite seu e-mail" required>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
            <button type="submit" class="submit-button">Avançar</button>
        </form>

        <a href="#" id="forgotPassword">Esqueceu sua senha?</a>

        <a href="criarConta.php" id="createAccount">Não tem conta? Crie conta</a>
    </div>

    <script src="script.js"></script>
</body>
</html>