<?php
    include("conexao.php");
    
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #212529; /* Cor de fundo */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Ocupa toda a altura da tela */
            color: #f8f9fa; /* Cor do texto */
        }
        .login-container {
            background-color: #343a40; /* Fundo do formulário */
            border-radius: 0.5rem; /* Cantos arredondados */
            padding: 2rem; /* Espaçamento interno */
            width: 350px; /* Largura do formulário */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra */
        }
        .btn-custom {
            background-color: #ffc107; /* Cor do botão */
            color: #212529; /* Cor do texto do botão */
        }
        .btn-custom:hover {
            background-color: #e0a800; /* Cor do botão ao passar o mouse */
        }
        .form-label {
            margin-top: 1rem; /* Margem superior para as labels */
        }
    </style>
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h3 class="text-center">Conecte-se!</h3>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">@ E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-custom w-100">CONECTE-SE</button>
            <div class="text-center mt-3">
                <a href="#" class="text-light">Esqueceu sua senha?</a>
            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
