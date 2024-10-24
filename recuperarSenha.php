<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-box">
        <button class="close-button" id="closeRecover">X</button>
        <img src="logo.png" alt="Logo" class="logo">
        
        <button class="login-google">Fazer Login com Google</button>
        <button class="login-microsoft">Fazer Login com Microsoft</button>

        <div class="divider">
            <span>OU</span>
        </div>

        <form action="recuperarSenha.php" method="POST" id="recoverForm">
            <input type="email" name="email" placeholder="Digite seu e-mail" required>
            
            <div class="captcha-box">
                <input type="checkbox" id="notRobot" required>
                <label for="notRobot">Não sou um robô</label>
            </div>

            <button type="submit" class="submit-button">Enviar E-mail de recuperação</button>
        </form>

        <a href="index.php" id="backToLogin">Voltar ao Login</a>
    </div>

    <script src="script.js"></script>
</body>
</html>
