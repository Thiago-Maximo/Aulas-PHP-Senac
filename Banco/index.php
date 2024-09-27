<html>
<body>
<?php
    include("conexao.php");
 

    $id = '';
    $nome = '';
    $usuario = '';
    $senha = '';
    $saldo = '';
 
    
    if (!empty($_POST['id']) && isset($_POST['Deletar'])) {
        $sql = "DELETE FROM contas WHERE id=" . $_POST['id'];
        $Mysql->query($sql);
    }
 
    // Atualizando dados quando o formulário de edição for submetido
    if (isset($_POST['Alterar']) && !empty($_POST['id'])) {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $saldo = $_POST["saldo"];
 
        $query = "UPDATE contas SET nome='$nome', usuario='$usuario', senha='$senha', saldo='$saldo' WHERE id=" . $id;
        $Mysql->query($query);
    }
 
    // Carregando dados do banco para o formulário ao clicar em "Atualizar"
    if (isset($_POST['Atualizar']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "SELECT * FROM contas WHERE id=" . $id;
        $resultado = $Mysql->query($sql);
 
        if ($row = $resultado->fetch_assoc()) {
            $nome = $row['nome'];
            $usuario = $row['usuario'];
            $senha = $row['senha'];
            $saldo = $row['saldo'];
        }
    }
 

    if (!empty($_POST['nome']) && isset($_POST['Inserir'])) {
        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $saldo = $_POST["saldo"];
 
        $sql = "INSERT INTO contas (nome, usuario, senha, saldo) VALUES ('$nome', '$usuario', '$senha', '$saldo')";
        $Mysql->query($sql);
    }
 
    $sql = "SELECT id, nome, usuario, saldo FROM contas";
    $dados = $Mysql->query($sql);
 
    echo "<table><tr><th>ID</th><th>Nome</th><th>Usuário</th><th>Saldo</th></tr>";
    while ($row = $dados->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["usuario"] .
        "</td><td>" . $row["saldo"] . "</td>
        <td>
        <form action='index.php' method='POST'>
            <input type='hidden' name='id' value='" . $row["id"] . "'>
            <input type='submit' value='Deletar' name='Deletar'>
        </form>
        </td>
        <td>
        <form action='index.php' method='POST'>
            <input type='hidden' name='id' value='" . $row["id"] . "'>
            <input type='submit' value='Atualizar' name='Atualizar'>
        </form>
        </td>
        </tr>";
    }
    echo "</table>";
?>
 
<form action="index.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>"><br>
    Nome: <input type="text" name="nome" value="<?php echo $nome; ?>"><br>
    Usuário: <input type="text" name="usuario" value="<?php echo $usuario; ?>"><br>
    Senha: <input type="text" name="senha" value="<?php echo $senha; ?>"><br>
    Saldo: <input type="text" name="saldo" value="<?php echo $saldo; ?>"><br>
    <?php if ($id): ?>
        <input type="submit" value="Alterar" name="Alterar">
    <?php else: ?>
        <input type="submit" value="Inserir" name="Inserir">
    <?php endif; ?>
</form>
 
</body>