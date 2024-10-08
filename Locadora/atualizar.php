<?php
    include("conexao.php");

    $id = "";
    $filme = "";
    $genero = "";
    $indicacao = "";
    $lancamento = "";
    $duracao = "";
    $diretor = "";
    $produtora = "";
    $valor = "";

     // Carregando dados do banco para o formulário ao clicar em "Atualizar"
     if (isset($_POST['Atualizar']) && !empty($_POST['id'])) {
        $id = $_POST['id'];
        $sql = "SELECT * FROM produtos WHERE id=" . $id;
        $resultado = $Mysql->query($sql);
 
        if ($row = $resultado->fetch_assoc()) {
            $id = $row["id"];
            $filme = $row["filme"];
            $genero = $row["genero"];
            $indicacao = $row["indicacao"];
            $lancamento = $row["lancamento"];
            $duracao = $row["duracao"];
            $diretor = $row["diretor"];
            $produtora = $row["produtora"];
            $valor = $row["valor"];
        }
    }

    // Atualizando dados quando o formulário de edição for submetido
    if (isset($_POST['Alterar']) && !empty($_POST['id'])) {
            $id = $_POST['id'];
            $filme = $_POST['filme'];
            $genero = $_POST["genero"];
            $indicacao = $_POST["indicacao"];
            $lancamento = $_POST["lancamento"];
            $duracao = $_POST["duracao"];
            $diretor = $_POST["diretor"];
            $produtora = $_POST["produtora"];
            $valor = $_POST["valor"];
      
            $query = "UPDATE produtos SET filme = '$filme',genero = '$genero', indicacao='$indicacao',lancamento='$lancamento',duracao='$duracao',diretor='$diretor',produtora='$produtora',valor='$valor' WHERE id = '$id'";
            $Mysql->query($query);
      
            echo "<script>
                alert('Filme Atualizado com SUCESSO!!!');
                window.location.href = 'index.php'; 
            </script>";
    }
?>

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
        <form id="Formulario" action="atualizar.php" method="POST">
            <div class="row mb-3">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Filme" id="filme" name="filme" value="<?php echo htmlspecialchars($filme); ?>">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Gênero" id="genero" name="genero" value="<?php echo htmlspecialchars($genero); ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Indicação" id="indicacao" name="indicacao" value="<?php echo htmlspecialchars($indicacao); ?>">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Lançamento" id="lancamento" name="lancamento" value="<?php echo htmlspecialchars($lancamento); ?>">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Duração" id="duracao" name="duracao" value="<?php echo htmlspecialchars($duracao); ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Diretor" id="diretor" name="diretor" value="<?php echo htmlspecialchars($diretor); ?>">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Produtora" id="produtora" name="produtora" value="<?php echo htmlspecialchars($produtora); ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <input type="number" class="form-control" placeholder="Valor" id="valor" name="valor" value="<?php echo htmlspecialchars($valor); ?>">
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>"><br>
            <button type="submit" class="btn btn-primary" id="Botao_Inserir" name="Alterar" value="Alterar">Atualizar Filme</button>
        </form>
    </div>
</body>
</html>
