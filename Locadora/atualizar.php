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
            <button type="submit" class="btn btn-primary" id="Botao_Inserir" name="Atualizar" value="Atualizar">Atualizar Filme</button>
        </form>
    </div>
</body>
</html>

<?php
    // Inicializa variáveis
    $id = "";
    $filme = "";
    $genero = "";
    $indicacao = "";
    $lancamento = "";
    $duracao = "";
    $diretor = "";
    $produtora = "";
    $valor = "";

    // Carregar dados do banco para o formulário ao clicar em "Atualizar"
    if (isset($_POST['Atualizar']) && !empty($_POST['id'])) {
        $id = (int)$_POST['id'];  // Sanitiza o ID
        $sql = "SELECT * FROM produtos WHERE id = $id";
        $resultado = $Mysql->query($sql);
    
        if ($resultado === false) {
            // Exibe o erro da consulta SQL
            echo "Erro na consulta SQL: " . $Mysql->error;
        } else {
            if ($resultado->num_rows > 0) {
                if ($row = $resultado->fetch_assoc()) {
                    $filme = htmlspecialchars($row["filme"]);
                    $genero = htmlspecialchars($row["genero"]);
                    $indicacao = htmlspecialchars($row["indicacao"]);
                    $lancamento = htmlspecialchars($row["lancamento"]);
                    $duracao = htmlspecialchars($row["duracao"]);
                    $diretor = htmlspecialchars($row["diretor"]);
                    $produtora = htmlspecialchars($row["produtora"]);
                    $valor = htmlspecialchars($row["valor"]);
                }
            } else {
                echo "Nenhum registro encontrado com o ID fornecido.";
            }
        }
    }
?>
