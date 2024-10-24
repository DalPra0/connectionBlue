<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $senha_correta = 'senha_correta';

    if ($password == $senha_correta) {
        echo "Login bem-sucedido!";
    } else {
        echo "Senha incorreta!";
    }
}
?>
