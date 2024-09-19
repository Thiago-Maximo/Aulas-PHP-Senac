<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Adicionar Produto</h1>
    <form action="" method="POST">
        <label for="produto">Nome do Produto:</label>
        <input type="text" id="produto" name="produto" required>
        <br><br>
        <label for="valor">Valor do Produto:</label>
        <input type="number" id="valor" name="valor" step="0.01" required>
        <br><br>
        <input type="submit" value="Adicionar Produto">
    </form>
 
    <?php
    session_start(); // Iniciar sessão
 
    // Verifica se já existe uma lista de produtos, se não, cria uma
    if (!isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = [];
    }
 
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['produto'], $_POST['valor'])) {
        $produto = $_POST['produto'];
        $valor = (float)$_POST['valor'];
 
        // Adiciona o produto e valor ao array na sessão
        $_SESSION['produtos'][] = ['nome' => $produto, 'valor' => $valor];
    }
 
    // Exibe a lista de produtos e o valor total
    if (!empty($_SESSION['produtos'])) {
        echo "<h2>Lista de Produtos</h2>";
        echo "<ul>";
        $total = 0;
        foreach ($_SESSION['produtos'] as $item) {
            echo "<li>" . htmlspecialchars($item['nome']) . " - R$ " . number_format($item['valor'], 2, ',', '.') . "</li>";
            $total += $item['valor'];
        }
        echo "</ul>";
        echo "<h3>Total: R$ " . number_format($total, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>