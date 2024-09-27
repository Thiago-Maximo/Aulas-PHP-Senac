<?php
    include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Locadora</title>
</head>
<body>
    <div class="container-fluid" id="Tabela">
        <?php
            $sql = "SELECT id,filme,genero,indicacao,lancamento,duracao,diretor,produtora,valor FROM produtos";
            $dados = $Mysql -> query($sql);
            echo "<table class='table table-striped'>
            <thead>
                <tr>
                    <th>Filme</th>
                    <th>Gênero</th>
                    <th>Indicação</th>
                    <th>Lançamento</th>
                    <th>Duração</th>
                    <th>Diretor</th>
                    <th>Produtora</th>
                    <th>Valor</th>
                </tr>
            </thead>";
     
            while ($row = $dados->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["filme"] . "</td>
                <td>" . $row["genero"] . "</td>
                <td>" . $row["indicacao"] . "</td>
                <td>" . $row["lancamento"] . "</td>
                <td>" . $row["duracao"] . "</td>
                <td>" . $row["diretor"] . "</td>
                <td>" . $row["produtora"] . "</td>
                <td>" . $row["valor"] . "</td>
                <td>
                <form action='deletar.php' method='POST'>
                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                    <input type='submit' value='Deletar' name='Deletar' class='inputs'>
                </form>
                <form action='atualizar.php' method='POST'>
                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                    <input type='submit' value='Atualizar' name='Atualizar' class='inputs'>
                </form>
                </td>
                </tr>";
            }
            echo "</table>";
        ?>
    </div>
    <div>
        <form action="inserir.php" method="POST">
            <input type="submit" value="Inserir Filme" name="Inserir" id="inserir"  class='inputs'>
        </form>
    </div>
</body>
</html>