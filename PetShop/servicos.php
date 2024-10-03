<?php 
include("topo.php"); 
include("conexao.php"); 

// Query para buscar dados dos serviços
$sql = "SELECT nome, descricao FROM servicos"; // Apenas busca nome e descrição
$result = $Mysql->query($sql);

// Array de imagens manualmente definidas
$imagens = [
    "Serviço 1" => "img/ração-dog.jpg", // Substitua pelo caminho da sua imagem
    "Serviço 2" => "img/imagem_servico2.jpg", // Substitua pelo caminho da sua imagem
    "Serviço 3" => "img/imagem_servico3.jpg", // Substitua pelo caminho da sua imagem
    // Adicione mais serviços e imagens conforme necessário
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link type="image/png" sizes="16x16" rel="icon" href="PetShop/img/favicon.svg">
    <title>Serviços</title>
</head>
<body>
<a href="index.php" class="volta-pagina fixed">Home/Serviços</a>

<div class="cards">
    <h2>Serviços Disponíveis</h2>
    <div class="cards-list"> <!-- Início da lista de cards -->
        <?php
        if ($result->num_rows > 0) {
            // Exibir os dados de cada linha
            while ($row = $result->fetch_assoc()) {
                $nome_servico = $row["nome"];
                $descricao_servico = $row["descricao"];
                $imagem_servico = isset($imagens); // Imagem padrão caso não haja

                echo '<div class="card-item">'; // Card
                echo '<img src="' . $imagem_servico . '" alt="' . $nome_servico . '">'; // Imagem do serviço
                echo '<h3>' . $nome_servico . '</h3>'; // Nome do serviço
                echo '<p>' . $descricao_servico . '</p>'; // Descrição do serviço
                echo '</div>'; // Fechar card
            }
        } else {
            echo "0 resultados"; // Mensagem caso não haja serviços
        }
        // Fechar a conexão
        $Mysql->close();
        ?>
    </div> <!-- Fim da lista de cards -->
</div>
</body>
</html>