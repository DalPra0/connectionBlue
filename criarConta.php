<?php
$host = 'localhost';
$dbname = 'nome_do_banco';
$username = 'root';
$password = '';


try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    die();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $email_confirm = $_POST['email_confirm'];
    $senha = $_POST['senha'];
    $senha_confirm = $_POST['senha_confirm'];

    if ($email != $email_confirm) {
        echo "Os e-mails não coincidem!";
    } elseif ($senha != $senha_confirm) {
        echo "As senhas não coincidem!";
    } else {
        $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nome, sobrenome, cpf, data_nascimento, email, senha) 
                VALUES (:nome, :sobrenome, :cpf, :data_nascimento, :email, :senha)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha_hashed);

        if ($stmt->execute()) {
            header("Location: anexarLaudo.php");
            exit();
        } else {
            echo "Erro ao criar conta. Tente novamente!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-box" id="createAccountBox">
        <button class="close-button" id="closeCreateAccount">X</button>
        <img src="logo.png" alt="Logo" class="logo">
        
        <button class="login-google">Criar conta com Google</button>
        <button class="login-microsoft">Criar conta com Microsoft</button>

        <div class="divider">
            <span>OU</span>
        </div>

        <form action="criarConta.php" method="POST" id="createAccountForm">
            <input type="text" name="nome" placeholder="Digite seu nome" required>
            <input type="text" name="sobrenome" placeholder="Seu sobrenome" required>
            <input type="text" name="cpf" placeholder="CPF 000.000.000-00" required>
            <input type="text" name="data_nascimento" placeholder="Data nascimento dd/mm/aaaa" required>
            <input type="email" name="email" placeholder="Digite seu e-mail" required>
            <input type="email" name="email_confirm" placeholder="Repita seu e-mail" required>
            <input type="password" name="senha" placeholder="Crie uma senha" required>
            <input type="password" name="senha_confirm" placeholder="Repita sua senha" required>
            <button type="submit" class="submit-button">Avançar</button>
        </form>
    </div>

</body>
</html>
