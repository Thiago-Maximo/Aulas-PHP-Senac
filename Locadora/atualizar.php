<?php include("conexao.php") ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inserir Filme</title>
</head>
<body>
    <div class="container mt-5">
        <form id="Formulario" action ="inserir.php" method="POST">
            <div class="row mb-3">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Filme" id="filme" name="filme">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Gênero" id="genero" name="genero">
                </div>
            </div>
 
            <div class="row mb-3">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Indicação" id="indicacao" name="indicacao">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Lançamento" id="lancamento" name="lancamento">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Duração" id="duracao" name="duracao">
                </div>
            </div>
 
            <div class="row mb-3">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Diretor" id="diretor" name="diretor">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Produtora" id="produtora" name="produtora">
                </div>
            </div>
 
            <div class="row mb-3">
                <div class="col-6">
                    <input type="number" class="form-control" placeholder="Valor" id="valor" name="valor">
                </div>
            </div>
 
            <button type="submit" class="btn btn-primary" id="Botao_Inserir" name="Atualizar" value="Atualizar">Atualizar Filme</button>
        </form>
    </div>
</body>
</html>
<?php
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
?>