<?php
session_start();
include("topo.php");
include("conexao.php");
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script> 

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link type="image/png" sizes="16x16" rel="icon" href="PetShop/img/favicon.svg">
    <title>Pet-Shop</title>
</head>
<body>

<!-- Carrossel sem navegação por cliques e sem botões de controle -->
<div id="autoCarousel" class="carousel slide" data-ride="carousel" data-interval="3000"> <!-- Define intervalo de 3 segundos -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Pet-Store.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Propaganda.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Pet-Food.jpg" alt="Third slide">
    </div>
  </div>
</div>

<!-- Script para garantir o funcionamento do carrossel -->
<script>
  $(document).ready(function(){
    $('#autoCarousel').carousel({
      interval: 3000,  // Define o intervalo de 3 segundos para a troca automática de imagens
      pause: false     // Impede que o carrossel pare ao passar o mouse por cima
    });
  });
</script>
</body>
</html>
